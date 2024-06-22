<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

// use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\Cache;
// use Cookie;


class WeixinController extends Controller
{
    public function weixin(Request $request){
        return Socialite::driver('weixin')->redirect();
    }

    public function weixinlogin(){
        $socialUser = Socialite::driver('weixin')->user();
        $avatar = $socialUser->avatar;
        $socialId = $socialUser->id;
        // 如果已登陆
        if($user = Auth::user()){
            // 执行绑定！
            $user->setMeta('wxid', $socialId);
            $user->setMeta('weixin', $socialUser);
        }else{
            // 未登录，执行登录！
            $user = User::whereHasMeta('wxid', $socialId)->first();
            $email = $socialId.'@wx';
            if(!$user){
                $user = User::create([
                    'name' => $socialUser->nickname ?: $socialUser->name,
                    'email' => $email,
                    'email_verified_at' => now(),
                    'password' => Hash::make(Str::random(8)),
                    'remember_token' => Str::random(10),
                    'profile_photo_path' => $avatar,
                ]);
                $user->setMeta('wxid', $socialId);
                $user->setMeta('weixin', $socialUser);
            }
            //执行登录！
            Auth::loginUsingId($social->user_id, true);//自动登入！
        }
        // return Redirect::intended('dashboard');
    }
    
}
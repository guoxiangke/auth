@section('title', '授权访问，使用完整服务')

<x-wechat-layout>
    <div class="page">
        <div class="page__bd page__bd_spacing">
            <br/><br/>
            <p class="page__desc"  style="text-align: center;">要使用完整服务，请授权访问您的头像和昵称</p>
            <br/>
            <a href="javascript:" role="button" title="等待中" class="weui-btn weui-btn_default">请点右下角↘</a>

            <img  src="{{ asset('/images/pointer.webp') }}" style="transform: rotate(90deg); position: fixed; bottom: 0px;right: -50px;">
        </div>
    </div>
</x-wechat-layout>
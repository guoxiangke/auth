<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>授权登陆</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    .btn {
      @apply flex items-center justify-center mx-auto text-white text-center;
      width: 29.5rem;
      height: 3rem;
      border-radius: 2.3rem;
      background: linear-gradient(315deg, #33C3FF 0%, #1790FF 100%);
    }
  </style>
</head>
<body onclick="window.location.href ='/login/wechat'" class="cursor-pointer flex md:items-center justify-center min-h-screen bg-white">
  <div class="bg-white rounded-lg md:shadow-lg p-8 max-w-md w-full">
    <div class="flex flex-col items-start">
      <div class="flex items-center mb-6">
        <img src="/logo_2x.png" alt="诺云直播" class="w-12">
        <h1 class="text-2xl font-bold ml-2">以琳云科技</h1>
      </div>
      <p class="text-gray-500 mb-6">微信登录授权</p>

      <div class="w-full rounded-lg mb-6 flex items-center justify-center">
        <img src="/guideImg.png" alt="Guide Image" class="w-full h-auto object-contain">
      </div>
      <div class="w-full flex justify-center">
        <button class="btn bg-blue-500 text-white px-6 py-2">微信授权登录</button>
      </div>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <x-head></x-head>
  </head>
  <body>
    <!--NAVBAR COMPONENT-->
    <div class="bg-gray-900 text-white p-3">
      <div class="text-3xl font-bold mx-3 p-2">Sakusen</div>
      <div class="flex space-x-3 mx-5 text-lg">
        <div class="bg-black rounded px-2 text-xl transition-all duration-500 hover:bg-white hover:text-black cursor-pointer">Home</div>
        <div class="bg-black rounded px-2 text-xl transition-all duration-500 hover:bg-white hover:text-black cursor-pointer">Recent</div>
        <div class="bg-black rounded px-2 text-xl transition-all duration-500 hover:bg-white hover:text-black cursor-pointer">Featured</div>
        <div class="bg-black rounded px-2 text-xl transition-all duration-500 hover:bg-white hover:text-black cursor-pointer">Upload</div>
      </div>
    </div>
    <!-- END OF NAVBAR COMPONENT -->

    <!-- START OF POST CONTAINER -->
    <div class="mx-auto container w-6/4 mt-3 bg-gray-700 rounded border shadow-lg">
      <div class="font-bold text-2xl m-3 text-white">I hate people</div>
      <div class="-mt-3 antialiased text-sm italic m-3 text-white">By: <underline class="underline cursor-pointer">Shiggy</underline></div>
      <!--POST LINE DIVIDER POG-->
      <div class="w-full p-1 bg-opacity-70 bg-gray-900"></div>
      <p class="m-3 text-white">I dont understand people. I just dont.</p>
      <div class="w-full p-1 bg-opacity-70 bg-gray-900 text-white text-center">
        Comments
        <!--COMMENT CONTINER SEX-->
        @foreach($data as $user)
        <div class="mt-2 w-max p-2 rounded">
          <div class="font-bold inline">{{$user['username']}}</div>
          :
          <div class="inline">{{$user['comment']}}</div>
        </div>
@endforeach
      </div>
    </div>
  </body>
</html>

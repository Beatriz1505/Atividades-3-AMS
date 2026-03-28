

<?php $__env->startSection('content'); ?>

<title>Home - The Black Parade</title>

<div class="py-8 px-4 animate-[slideIn_0.8s_ease-out]"> 

  <h1 class="font-[Creepster] text-4xl">Welcome to The Black Parade!</h1> 
  <p class="mt-2 text-[#B9B9B9] font-[Arima]">A fan site dedicated to the music and legacy of <span class="text-[#B22A2A]"><a href="/artist" class="hover:underline">My Chemical Romance</a></span></p>

  <div class="bg-[#700000] text-white font-[Arima] p-2 rounded-lg inline-block mt-3">
    <p class="font-[Creepster] text-xl">We'll carry on!</p> 
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 py-16"> 

    <div class="cursor-pointer bg-[#2C2C2C] text-white rounded-lg hover:scale-105 hover:shadow-lg hover:shadow-white/30 transition duration-300">
      <img class="rounded-t-lg w-full h-52 object-cover" src="https://i.pinimg.com/736x/30/0e/6f/300e6feb651d284ac519c1967f8360f7.jpg" alt="Album Cover"> 
      <div class="p-4">
        <h2 class="font-[Creepster] text-2xl mb-2">Albums</h2> 
        <p class="text-[#B9B9B9] font-[Arima]">Explore the discography of My Chemical Romance.</p>
      </div>
    </div>

    <div class="cursor-pointer bg-[#2C2C2C] text-white rounded-lg hover:scale-105 hover:shadow-lg hover:shadow-white/30 transition duration-300">
      <img class="rounded-t-lg w-full h-52 object-cover" src="https://i.pinimg.com/1200x/4c/6c/b5/4c6cb53009e75e4d90bff6f0d5be0bae.jpg" alt="Community">
      <div class="p-4">
        <h2 class="font-[Creepster] text-2xl mb-2">Community</h2> 
        <p class="text-[#B9B9B9] font-[Arima]">Join the conversation and connect with other fans of My Chemical Romance.</p>
      </div>
    </div>

    <div class="cursor-pointer bg-[#2C2C2C] text-white rounded-lg hover:scale-105 hover:shadow-lg hover:shadow-white/30 transition duration-300">
      <img class="rounded-t-lg w-full h-52 object-cover" src="https://i.pinimg.com/736x/c3/a8/d7/c3a8d7425e7d496d495bb872a6a26120.jpg" alt="Latest News">
      <div class="p-4">
        <h2 class="font-[Creepster] text-2xl mb-2">Latest News</h2> 
        <p class="text-[#B9B9B9] font-[Arima]">Stay updated with the latest news and announcements about My Chemical Romance.</p>
      </div>
    </div>

  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\laravel-base-main\resources\views/home.blade.php ENDPATH**/ ?>
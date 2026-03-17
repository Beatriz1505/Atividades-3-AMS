@extends('layouts.app')

@section('content')

<title>Artist - The Black Parade</title>

<div class="p-6 animate-[slideIn_0.8s_ease-out]">

<img class="w-96 mx-auto block" src="https://www.pngall.com/wp-content/uploads/11/My-Chemical-Romance-PNG-Cutout.png" alt="">

  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-10"> 

    <div class="cursor-pointer bg-[#700000] text-white rounded-lg hover:scale-105 hover:shadow-lg hover:shadow-white/30 transition duration-300">
      <img class="rounded-t-lg " src="https://i.pinimg.com/1200x/4f/ca/50/4fca50e13a268b0aa9269f9ece8dea1d.jpg" alt="Album Cover"> 
      <div class="p-4 text-center">
        <h2 class="font-[Creepster] text-2xl mb-2">Frank Iero</h2> 
        <p class="text-[#B9B9B9] font-[Arima]">Guitar</p>
      </div>
    </div>

    <div class="cursor-pointer bg-[#700000] text-white rounded-lg hover:scale-105 hover:shadow-lg hover:shadow-white/30 transition duration-300">
      <img class="rounded-t-lg" src="https://i.pinimg.com/736x/c2/29/69/c229693f545915ac8dc821aca0838a36.jpg" alt="Community">
      <div class="p-4 text-center">
        <h2 class="font-[Creepster] text-2xl mb-2">Gerard Way</h2> 
        <p class="text-[#B9B9B9] font-[Arima]">Vocals</p>
      </div>
    </div>

    <div class="cursor-pointer bg-[#700000] text-white rounded-lg hover:scale-105 hover:shadow-lg hover:shadow-white/30 transition duration-300">
      <img class="rounded-t-lg" src="https://64.media.tumblr.com/54f11656c9172fed7ebf1d89db04c7dc/81482c58eb313545-38/s500x750/ef63324577e969de55d17480ca0f6ac6cad718f5.jpg" alt="Latest News">
      <div class="p-4 text-center">
        <h2 class="font-[Creepster] text-2xl mb-2">Mikey Way</h2> 
        <p class="text-[#B9B9B9] font-[Arima]">Bass</p>
      </div>
    </div>
    
    <div class="cursor-pointer bg-[#700000] text-white rounded-lg hover:scale-105 hover:shadow-lg hover:shadow-white/30 transition duration-300">
      <img class="rounded-t-lg" src="https://64.media.tumblr.com/8dfb092dc0ed4af130fb2771a99699ad/5e9cd5d95e00f159-59/s500x750/496b4cdca4d3130e22db26997a64c45d53b125bd.jpg" alt="Latest News">
      <div class="p-4 text-center">
        <h2 class="font-[Creepster] text-2xl mb-2">Ray Toro</h2> 
        <p class="text-[#B9B9B9] font-[Arima]">Guitar</p>
      </div>
    </div> 

  </div>

     <p class="font-[Arima] "><span class="text-red-400">My Chemical Romance (MCR)</span> is an influential American rock band formed in New Jersey in 2001 by Gerard Way, Ray Toro, Frank Iero, and Mikey Way. 
        Known for hits like "Helena" and "Welcome to the Black Parade," they are iconic figures in 2000s alternative rock, pop-punk, and emo, known for 
        a dramatic, theatrical sound.</p>

  </div>
@endsection 
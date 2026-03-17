@extends('layouts.app')

@section('content')

<title>Register - The Black Parade</title>

<div class="flex justify-center pt-10 bg-[#141414] min-h-[calc(100vh-80px)] items-center">
  <div class="bg-[#700000] w-[350px] p-8 rounded-2xl shadow-lg text-center text-white">
    
    <h2 class="text-xl mb-6 font-[Creepster]">Welcome to The Black Parade!</h2>

    <form class="space-y-6 font-[Arima]">
        
      <input type="text" requiered placeholder="Name" class="w-full px-2 py-1.5 rounded bg-[#B22A2A] text-white placeholder-[#CF9999] focus:shadow-lg focus:shadow-white/30 focus:outline-none focus:ring-2 focus:ring-white">

      <input type="email" required placeholder="E-mail" class="w-full px-2 py-1.5 rounded bg-[#B22A2A] text-white placeholder-[#CF9999] focus:shadow-lg focus:shadow-white/30 focus:outline-none focus:ring-2 focus:ring-white">

      <input type="password" required placeholder="Password" class="w-full px-2 py-1.5 rounded bg-[#B22A2A] text-white placeholder-[#CF9999] focus:shadow-lg focus:shadow-white/30 focus:outline-none focus:ring-2 focus:ring-white">

      <input type="password" required placeholder="Confirm Password" class="w-full px-2 py-1.5 rounded bg-[#B22A2A] text-white placeholder-[#CF9999] focus:shadow-lg focus:shadow-white/30 focus:outline-none focus:ring-2 focus:ring-white">

        <a href="/home" class="btn btn-light font-[Creepster]">
          Register
        </a>

    </form>

    <hr class="my-6 border-white">

    <p class="font-[Creepster]">
      Already have an account?
      <a href="/login" class="text-[#FF0000] hover:underline">Sign in</a>
    </p>

  </div>
</div>

@endsection 
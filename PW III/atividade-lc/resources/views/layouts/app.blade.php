<!DOCTYPE html>
<html>
<head>
    
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

<nav class="bg-red-900 px-6 py-3 flex justify-between items-center">
  

  <div class="flex items-center gap-2 text-white">
    <img src="https://www.pngall.com/wp-content/uploads/11/My-Chemical-Romance-Transparent.png" alt="Logo" class="h-8">
    <span class="text-lg">I'm Not Okay (Net)</span>
  </div>

  <div class="flex gap-2 ">
<a href="/login" class="border border-white px-3 py-1 rounded text-white 
hover:bg-white! hover:text-red-900! transition">
  Sign in
</a>

<a href="/register" class="bg-white text-red-900 px-3 py-1 rounded 
hover:bg-red-900! hover:text-white! transition">
  Sign up
</a>
  </div>

</nav>

<div class="container mt-4">

@yield('content')

</div>

</body>
</html>
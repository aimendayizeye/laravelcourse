<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <nav class="p-4 bg-white flex justify-between mt-1 m-5 rounded-md shadow-md">
<ul class="flex items-center">
    <li class="p-3">
        <a href="/">Home</a>
    </li>
    <li class="p-3">
        <a href=" {{route('dashboard')}} ">Dashboard</a>
    </li>
    <li class="p-3">
        <a href="">Posts </a>
    </li>
</ul>
<ul class="flex items-center">
    {{-- @if (auth()->user()) --}}
        @auth
    <li class="p-3">
        <a href="">{{auth()->user()->name}}</a>
    </li>
    <form action="{{route('logout')}}" method="POST">
        @csrf
       <button class="p-3" type="submit">Logout</button>
    </form>
    
    @endauth
    @guest
    <li class="p-3">
        <a href="{{route('login')}}">Login</a>
    </li>
    <li class="p-3">
        <a href=" {{route('register')}} ">Register </a>
    </li>
    @endguest

</ul>
    </nav>
    @yield('content')
</body>
</html>
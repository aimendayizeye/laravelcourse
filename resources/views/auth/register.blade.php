@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-6/12  bg-white p-6 rounded-lg">
<form action=" {{route('register')}}  " method="POST">
    @csrf
    <div class="mb-4">
<label for="name" class="sr-only">Name</label>
<input type="text" name="name" placeholder="Enter your name"
class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value=" {{old('name')}} "
>
@error('name')
    <div class="text-red-500 mt-2 text-sm">
{{$message}}
    </div>
@enderror
</div>
<div class="mb-4">
    <label for="username" class="sr-only">Username</label>
    <input type="text" name="username" placeholder="Enter your username"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value=" {{old('username')}} "
    >
    @error('username')
    <div class="text-red-500 mt-2 text-sm">
{{$message}}
    </div>
@enderror
        </div>
        <div class="mb-4">
            <label for="name" class="sr-only">Email</label>
            <input type="text" name="email" placeholder="Enter your email"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value=" {{old('email')}} "
            >
            @error('email')
    <div class="text-red-500 mt-2 text-sm">
{{$message}}
    </div>
@enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" placeholder="Enter your password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value=""
                    > 
                    @error('password')
    <div class="text-red-500 mt-2 text-sm">
{{$message}}
    </div>
@enderror
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="sr-only">Confirm Password </label>
                            <input type="password" name="password_confirmation" placeholder="Enter your name"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg"  value=""
                            >

                                </div>

                                <div>
                                    <button type="submit" class="bg-blue-200 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                                </div>
</form>
        </div>
    </div>
@endsection
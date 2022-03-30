@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12  bg-white p-6 rounded-lg">
            <form action="{{ route('posts') }} " method="post">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>

                    <textarea name="body" id="" cols="30" rows="10" class="bg-gray-200 border-2 w-md rounded-lg "
                        @error('body') border-red-500 @enderror placeholder="Post description"></textarea>
                    @error('body')
                        {{ message }}
                    @enderror
                </div>
                <div>
                  <button type="submit" class="bg-blue-200 text-white px-4 py-3 rounded font-medium w-full">Register</button>
              </div>
            </form>
        </div>
    </div>
@endsection

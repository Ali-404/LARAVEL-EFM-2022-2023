<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts - create
        </h2>
    </x-slot>
    <div class="max-w-7xl  mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <form action="{{route('posts.store')}}" method="post" class="flex flex-col">
            @csrf
            <label for="content">Content</label>
            <input placeholder="Type content here .." class="border-0 @error('content') border-2 border-red-500 @enderror   bg-slate-200 rounded-md shadow" type="text" id="content" name="content"  class="">

            @error("content")
            <p class="text-red-300">{{ $message}} </p>
            @enderror

            <button class="mt-2 bg-emerald-200 p-2 rounded-md shadow">Create</button>
        </form>
    </div>

</x-app-layout>

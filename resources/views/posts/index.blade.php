<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>
    <div class="max-w-7xl flex items-center justify-center flex-col gap-2  mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @if (!isset($posts) or count($posts) <= 0)
            <span class="block text-center w-full ">No Posts created yet <a class="underline text-blue-500" href="{{route('posts.create')}}">create new one</a> </span>
        @else
            @foreach($posts as $post)
                <div class="inline-block w-[300px] h-[300px] flex  flex-col justify-between p-2 rounded-md bg-white shadow">
                    <h3 class="text-lg">{{$post->content}}</h3>
                    <div>
                        <h6 class="text-sm italic text-emerald-700">Posted by {{ $post->user->name }}</h6>
                        <h6 class="text-[11px] opacity-[40%] italic text-gray-700">{{ $post->created_at }}</h6>

                        <a href="{{route('posts.edit', $post)}}">Edit Post</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <a href="{{route('posts.create')}}" class="flex items-center justify-center fixed bottom-0 right-0 m-8 w-12 rounded-full hover:scale-[1.1] transition-all shadow h-12 bg-red-300">+</a>
</x-app-layout>

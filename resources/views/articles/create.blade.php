@extends("layouts.app")
@section("content")

    <h1>THIS IS THE CREATE FORM</h1>
    <form action="{{route("articles.store")}}" method="POST" >
        @csrf

        <input type="text" placeholder="Title" name="title">
        @error("title")
        <p style="color: red">{{ $message }}</p>
         @enderror
        <textarea  placeholder="Body" name="body"></textarea>
        @error("body")
        <p style="color: red">{{ $message }}</p>
          @enderror
        <input type="text" placeholder="categorie" name="categorie">
        @error("categorie")
            <p style="color: red">{{ $message }}</p>
        @enderror


        <button>CREATE</button>
    </form>

@endsection

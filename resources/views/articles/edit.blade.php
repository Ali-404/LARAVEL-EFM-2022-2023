@extends("layouts.app")
@section("content")

    <h1>THIS IS THE EDIT FORM</h1>
    <form action="{{route("articles.update", $article->id)}}" method="POST" >
        @csrf
        @method("PUT")

        <input type="text" placeholder="Title" name="title" value="{{$article->title}}" >
        @error("title")
        <p style="color: red">{{ $message }}</p>
         @enderror
        <textarea  placeholder="Body" name="body"  >{{$article->body}}</textarea>
        @error("body")
        <p style="color: red">{{ $message }}</p>
          @enderror
        <input type="text" placeholder="categorie" name="categorie"  value="{{$article->categorie}}">
        @error("categorie")
            <p style="color: red">{{ $message }}</p>
        @enderror


        <button>UPDATE</button>
    </form>

@endsection

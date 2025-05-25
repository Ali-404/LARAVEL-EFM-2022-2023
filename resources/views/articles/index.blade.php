@extends("layouts.app")
@section("content")
    <h1>Articles</h1>
    @foreach ($articles as $article)
        <ul>
            <li>{{$article->title}}</li>
            <li>{{$article->body}}</li>
            <li>{{$article->categorie}}</li>
            <a href="{{route('articles.edit', $article->id)}}">EDIT</a>
            <form action="{{route('articles.destroy', $article->id)}}" method="POST" >
                @csrf
                @method("DELETE")
                <button>DELETE</button>
            </form>
        </ul>
    @endforeach

    <a href="{{route('articles.create')}}">CREATE</a>

    {{$articles->links()}}
@endsection
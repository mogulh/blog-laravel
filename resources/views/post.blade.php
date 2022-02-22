<x-layout>
    <article>
        <h1>{{$post->title}}</a></h1>
        <p>by <a href="/author/{{$post->author->name}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->name}}">{{$post->category->name}}</a></p>
        <p>{{$post->body}}</p>
    </article>

    <a href="/">Go Back</a>

</x-layout>

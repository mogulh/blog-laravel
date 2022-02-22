<x-layout>
    @foreach ($posts as $post)


    <article>
        <h1><a href="/{{$post->slug}}">{{$post->title}}</a></h1>
        <p><a href="/categories/{{$post->category->name}}">{{$post->category->name}}</a></p>
        <p>{{$post->excerpt}}</p>
    </article>
    @endforeach


</x-layout>

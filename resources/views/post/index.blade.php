@extends('layouts.app')

@section('content')
    <div>
        <?php
        //{!! link_to_route('posts', 'published') !!} &nbsp;&nbsp;&nbsp; {!! link_to_route('posts.published', 'unpublished') !!}
        ?>
        <a href="/">published</a>&nbsp;&nbsp;&nbsp;<a href="/unpublished">unpublished</a>&nbsp;&nbsp;&nbsp;<a href='/post/create'>new</a>
    </div>

    @foreach($posts as $post)
        <article>
            <h2>{!! $post->title !!}</h2>
            <p>
                {!! $post->excerpt !!}
            </p>
            <p>
                published: {{ $post->published_at }}
            </p>
        </article>
    @endforeach
@stop
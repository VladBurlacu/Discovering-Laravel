<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Discovering Laravel</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body class="antialiased">

<article>
    <h1>{!! $post->title !!}</h1>

    <p>
        By <a href="#">{{$post->author->name}}</a> <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
    </p>

    <div>
        {!!$post->body!!}
    </div>
</article>

<a href="/">Go Back</a>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>All Posts</h1>

    {{-- Question No - 9 --}}
    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>Category: {{ $post->category->name }}</p>
        </div>
    @endforeach

</body>
</html>

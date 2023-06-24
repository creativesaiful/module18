<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Latest Posts</h1>

    {{-- Question no - 12 --}}

    @foreach ($categories as $category)
        <div class="category">
            <h2>{{ $category->name }}</h2>
            <h3>Latest Post:</h3>
            @if ($category->getLatestPost)
                <p>Title: {{ $category->getLatestPost->title }}</p>
                <p>Content: {{ $category->getLatestPost->content }}</p>
                <p>Created At: {{ $category->getLatestPost->created_at }}</p>
                <p>Updated At: {{ $category->getLatestPost->updated_at }}</p>
            @else
                <p>No posts found for this category.</p>
            @endif
        </div>
    @endforeach

</body>
</html>

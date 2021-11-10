<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Post Index</title>
</head>
<body>
    @yield('navbar')

    <a class="btn btn-primary my-4" href="{{route('posts.create')}}">Nuovo fumetto</a>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">title</th>
            <th scope="col">content</th>
            <th scope="col">slug</th>
            <th scope="col">thumbnail</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->thumbnail}}</td>
                    <td class="d-flex">
                        <a class="btn btn-warning" href="{{route('posts.show', $post['id'])}}">Dettagli</a>
                        <br>
                        <a class="btn btn-success" href="{{route('posts.edit', $post['id'])}}">Modifica</a>
                        <br>
                        <a class="btn btn-danger" href="{{route('posts.destroy', $post['id'])}}">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

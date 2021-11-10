@extends('layouts.backoffice')

@section('content')
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
                        <a class="btn btn-warning" href="{{route('admin.posts.show', $post['id'])}}">Dettagli</a>
                        <br>
                        <a class="btn btn-success" href="{{route('admin.posts.edit', $post['id'])}}">Modifica</a>
                        <br>
                        <form action="{{route('admin.posts.destroy', $post['id'])}}" method="post">
                            @csrf
                            @method('DELETE')
                        
                            <button class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary my-4" href="{{route('admin.posts.create')}}">New Post</a>
@endsection



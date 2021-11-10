<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Crate new post</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.posts.update', $post->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input value="{{ $post['title']}}" type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                      @error('title')
                          <div>{{$message}}</div>
                      @enderror
                    </div>
    
                    <div class="form-group">
                      <label for="content">Content</label>
                      <input value="{{ $post['content']}}" type="text" name="content" class="form-control" id="content" placeholder="Enter content">
                      @error('content')
                          <div>{{$message}}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input value="{{ $post['slug']}}" type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug">
                        @error('slug')
                          <div>{{$message}}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input value="{{ $post['thumbnail']}}" type="text" name="thumbnail" class="form-control" id="thumbnail" placeholder="Enter thumbnail">
                    </div>
                      
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>
   
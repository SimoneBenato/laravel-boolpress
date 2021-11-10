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
                <form action="{{route('admin.posts.store')}}" method="post">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="{{old('title')}}">
                      @error('title')
                          <div>{{$message}}</div>
                      @enderror
                    </div>
    
                    <div class="form-group">
                      <label for="content">Content</label>
                      <input type="text" name="content" class="form-control" id="content" placeholder="Enter content" value="{{old('content')}}">
                      @error('content')
                          <div>{{$message}}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug" value="{{old('slug')}}">
                        @error('slug')
                          <div>{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="text" name="thumbnail" class="form-control" id="thumbnail" placeholder="Enter thumbnail" value="{{old('thumbnail')}}">
                    </div>
                      
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>
   
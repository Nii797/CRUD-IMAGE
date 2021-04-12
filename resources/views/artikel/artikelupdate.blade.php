<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Update Data</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>UPDATE ARTIKEL</h1>
            <form action="/artikelupdate/{{$artikels->id}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                  <input type="text" class="form-control" name="title_artikel" value="{{ $artikels->title_artikel }}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="description" value="{{ $artikels->description }}">
                </div>

                <div class="form-group">
                    <textarea name="content_artikel" class="form-control" cols="131" rows="10">
                        {{ $artikels->content_artikel }}
                    </textarea>
                </div>

                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" value="{{ $artikels->image }}">
                        <label class="custom-file-label">Choose File</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning" style="color: white;">Update</button>
              </form>
        </div>
    </div>

</body>
</html>

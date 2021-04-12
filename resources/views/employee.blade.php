<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1> Image CRUD: in Laravel </h1>
            <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email ID">
                </div>
                <div class="form-group">
                    <label>Post</label>
                    <input type="text" name="post" class="form-control" placeholder="Enter Post">
                </div>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">Choose File</label>
                    </div>
                </div>
                <br><br>

                <button type="submit" name="submit" class="btn btn-primary"> Save Data </button>

            </form>
        </div>
    </div>

</body>
</html>

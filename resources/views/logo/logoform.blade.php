<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Logo</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Input Logo</h1><br><br>
            <form action="{{ route('addlogo') }}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                  <input type="text" class="form-control" name="logo_title" id="logo_title" placeholder="Enter Title ...">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description ...">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</body>
</html>

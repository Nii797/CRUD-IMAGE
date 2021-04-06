<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form artikel</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Input Artikel</h1>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" name="title_artikel" placeholder="Enter Title Artikel">
                </div>
                <div class="form-group">
                    <textarea name="content_artikel" cols="131" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">Choose File</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Data Logo</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Data Logo</h1><br><br>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title Logo</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($logos as $logo)
                  <tr>
                    <th>{{ $logo->id }}</th>
                    <td>{{ $logo->logo_title }}</td>
                    <td>{{ $logo->description }}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
    </div>

</body>
</html>

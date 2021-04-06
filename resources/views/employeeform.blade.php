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
            <h1>IMAGE CRUD - IN LARAVEL</h1><br><br>
            <a href="{{ route('employee') }}">
                <button class="btn btn-primary">Add</button>
            </a><br><br>
            <table class="table table-stripped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Post</th>
                    <th scope="col">Image</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ( $employees as $employee )
                  <tr>
                    <th>{{ $employee->id }}</th>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->post }}</td>
                    <td><img src="{{ asset('uploads/employee/' . $employee->image) }}" alt="image" width="100px" height="100px"></td>

                    <td><a href="/editimage/{{ $employee->id }}" class="btn btn-warning" style="color: white;">EDIT</a></td>
                    <td><a href="/deleteimage/{{ $employee->id }}" class="btn btn-danger">DELETE</a></td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
    </div>

</body>
</html>

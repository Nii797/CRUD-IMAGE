<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Artikel</title>
</head>
<body>

    <div class="container">
            <h1>Data Artikel</h1><br>

    <div class="container">
        <div class="navbar">
            <ul class="nav-item">
                <a href="{{ route('artikelform') }}" class="btn btn-primary">Add</a>
            </ul>
            <ul class="nav-item">
                <form class="d-flex" method="GET" action="{{ url('/artikelsearch') }}">
                    <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ old('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </div>

            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
            @endif

            <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col" width="120">Artikel Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Artikel Content</th>
                    <th scope="col">Image</th>
                    <th scope="col" colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($artikels as $artikel)

                    <tr>
                        <td>{{ $artikel->id }}</td>
                        <td>{{ $artikel->title_artikel }}</td>
                        <td>{{ $artikel->description }}</td>
                        <td>{{ $artikel->content_artikel }}</td>
                        <td>
                            <img src="{{ asset('uploads/artikel/'.$artikel->image) }}" width="110" height="110" alt="image">
                        </td>

                        <td><a href="/artikeledit/{{$artikel->id}}" class="btn btn-warning text-white">Edit</a></td>
                        <td><a href="/artikeldelete/{{$artikel->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>

                    @endforeach
                </tbody>
              </table>

              {{ $artikels->links() }}
    </div>

</body>
</html>

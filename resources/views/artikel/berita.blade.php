<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Document</title>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    @foreach ($logos as $logo)
                        {{ $logo->logo_title }}
                    @endforeach
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </nav>


    <section class="jumbotron text-center">
        <img src="" alt="">
        <h1 class="display-4 fw-bold">News Portal</h1>
        <p class="lead fw-border">Welcome to News Portal</p>
    </section>

    <section>
        <div class="container">
            <div class="row text-center mb3">
                <div class="col">
                    <h1>News Portal</h1>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach ($artikels as $artikel)
                    <div class="col-md-4 mt-5 mb-5">
                        <div class="card">
                            <img src="{{ asset('uploads/artikel/'. $artikel->image) }}" class="card-img-top" alt="tes" />
                            <div class="card-body">
                            <h3>{{ $artikel->title_artikel }}</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $artikels->links() }}
        </div>
    </section>

</body>
</html>

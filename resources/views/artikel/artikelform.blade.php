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
            <h1>Input Artikel</h1><br><br>

            <form action="{{ route('addartikel') }}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" class="form-control" name="title_artikel" placeholder="Enter Title Artikel">

                    @if ($errors->has('title_artikel'))
                        <span class="text-danger">{{ $errors->first('title_artikel') }}</span>
                    @endif

                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="description" placeholder="Enter Description">
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

{{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi laudantium asperiores cupiditate sint, alias voluptatem perspiciatis, eveniet consequatur vero illum accusamus expedita doloremque incidunt, ab corrupti nostrum? Nisi, ipsa iure culpa quia reiciendis eos fugit totam ab amet veritatis quaerat dolorum fuga praesentium rerum, necessitatibus perferendis nemo dolores commodi quo eaque sapiente vitae dolorem. Ut ea, voluptatibus modi distinctio hic dolore eveniet! Ipsam laudantium illo dicta saepe, hic vero laborum, doloremque recusandae, a modi aliquid voluptatem dolorem et exercitationem! Ratione accusamus doloremque id modi iste, ex nostrum necessitatibus? Veniam facilis ab, in iure quas numquam totam. Consequatur dolorem in illum consectetur odio quo, ullam laboriosam deserunt magni facilis amet iusto ratione dolor perspiciatis repellendus voluptas, quasi omnis. Est, dolore totam nulla aut aperiam officiis? Velit ducimus ad dignissimos quo cum. --}}


</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
      <div class="container mt-5">
        <div class="row">
          <em class="col alert alert-success">
            Tenemos un total de {{ $products->total() }} productos!
          </em>
        </div>
        <div class="row">
            @foreach($products as $product)
              <article class="col-md-4">
                <div class="card">
                  <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
                  <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>

                    <a href="{{ url('productos/categoria/'.$product->category->slug) }}" class="btn btn-primary">{{ $product->category->title }}</a>

                  </div>
                </div>
              </article>
            @endforeach
        </div>
        <div class="row d-flex justify-content-center">
          {{ $products->links() }}
        </div>
      </div>
    </body>
</html>
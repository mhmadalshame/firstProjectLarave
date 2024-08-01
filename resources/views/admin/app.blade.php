<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="flex-shrink-0 py-auto bg-dark text-white-50">

        <div class="container text-center">
            <small>Copyright &copy; Your Website</small>
          </div>
    </header>
    <div class="dropdown show">



        <select class="form-select" aria-label="Default select example" name="cars" id="cars">
          <option value="">chese a catogre</option>
          @foreach ($categorie as $cat )

          <option value="">{{$cat->name}}</option>

          @endforeach


        </select>

      </div>

      <main>
        @yield("main")

      </main>

    <footer class="footer fixed-bottom py-auto bg-dark text-white-50">

        <div class="container text-center">
            <small>Copyright &copy; Your Website</small>
          </div>
    </footer>
    <script src=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
        </script>

</body>
</html>

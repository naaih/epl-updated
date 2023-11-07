<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EPL Updated</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap');

    body {
      font-family: 'Inter', sans-serif;
    }

    ::-webkit-scrollbar {
        display: none;
    }
  </style>
</head>

<body>
  {{-- <div class="container text-center">
    <h1>Go to: <a href="http://localhost:8000/records">student records</a></h1>
  </div> --}}

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand lead" href="#">SRecords</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link"  href="http://localhost:8000/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="records">Records</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="modules">Modules</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
  </script>
</body>
</html>
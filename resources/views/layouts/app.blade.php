<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

  <style>
  body {
    background: linear-gradient(135deg, #e0f2fe, #eff6ff);
    font-family: 'Poppins', sans-serif;
    color: #1e293b;
    min-height: 100vh;
    padding-top: 120px; 
  }

  .navbar {
    background-color: #1e40af !important;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    border-radius: 0 0 15px 15px; 
    margin-top: 15px; 
    width: 96%;
    margin-left: auto;
    margin-right: auto;
  }

  .navbar-brand {
    font-weight: bold;
    color: #fff !important;
  }

  .navbar .nav-link {
    color: #e0f2fe !important;
    margin-right: 20px;
    font-weight: 500;
    transition: 0.3s;
  }

  .navbar .nav-link:hover {
    color: #bfdbfe !important;
    transform: translateY(-1px);
  }

  .content-wrapper {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    padding: 30px;
    margin-bottom: 50px;
  }

  footer {
    background-color: #1e40af;
    color: white;
    text-align: center;
    padding: 15px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    font-size: 0.9rem;
    margin-top: auto;
  }
</style>
</head>

<body class="d-flex flex-column min-vh-100">
  <x-navbar />

  <main class="flex-fill">
    <div class="container">
      <div class="content-wrapper">
        @yield('content')
      </div>
    </div>
  </main>

  <x-footer />
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body class="text-center">

    <main class="form-signin">
      <div class="card">
        <div class="card-body">
          <form action="/login" method="post">
            @csrf
              <img class="mb-4" src="{{ asset('img/bootstrap-logo.svg') }}" alt="" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
              @if (session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
              @endif
  
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                  <div class="invalid-feedback text-start">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
  
              <button class="w-100 btn btn-lg btn-primary" type="submit"><i class="bi bi-box-arrow-in-right"></i> Sign in</button>
          </form>
          <label>
              <small>No registerd? <a href="{{ route('register.store') }}">Register Now</a></small>
          </label>
          <p class="mt-5 mb-3 text-muted">&copy; Synodev</p>
        </div>
      </div>
    </main>
    
</body>
</html>

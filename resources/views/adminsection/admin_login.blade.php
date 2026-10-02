<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Signin - InApp Inventory Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('template2/src/assets/images/favicon_io/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('template2/src/assets/images/favicon_io/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template2/src/assets/images/favicon_io/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('template2/src/assets/images/favicon_io/site.webmanifest') }}">

  <!-- Template 2 Compiled Stylesheet (Bootstrap 5.3 + Custom Styles) -->
  <link rel="stylesheet" href="{{ asset('template2/assets/css/style.css') }}">
</head>

<body>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="card" style="max-width:420px; width:100%;">
    <div class="card-body p-5">
      <div class="text-center mb-3">
        <a href="#" class="mb-4 d-inline-block">
          <img src="{{ asset('template2/src/assets/images/logo-icon.svg') }}" alt="Logo Icon" width="36">
          <span class="ms-2">
            <img src="{{ asset('template2/src/assets/images/logo.svg') }}" alt="Logo">
          </span>
        </a>
        <h1 class="card-title mb-5 h5">Sign in to your account</h1>
      </div>

      <form class="needs-validation mt-3" action="{{url('/adminloginaction')}}" method="post" enctype="multipart/form-data">
        @csrf
          @if (session('message'))
            <div class="alert alert-danger">
                {{session('message')}}
            </div>
          @endif
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input id="email" name="email" type="email" class="form-control" placeholder="name@example.com" required>
          <div class="invalid-feedback">Please enter a valid email.</div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label d-flex justify-content-between">
            <span>Password</span>
          </label>
          <input id="password" name="password" type="password" class="form-control" placeholder="Password" required minlength="6">
          <div class="invalid-feedback">Please provide a password (min 6 characters).</div>
        </div>

        <button class="btn btn-primary w-100" type="submit">Sign in</button>
      </form>

      <div class="text-center mt-3 small text-muted">
        Don't have an account? <a href="{{ url('/admin-register') }}" class="link-primary">Sign up</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
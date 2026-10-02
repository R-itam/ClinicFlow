<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Signup - InApp Inventory Dashboard</title>
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
        <h1 class="card-title mb-5 h5">Create your account</h1>
      </div>

      <form class="needs-validation mt-3" action="{{url('/adminregisteraction')}}" method="post" enctype="multipart/form-data">
        @csrf
           @if (session('message'))
            <div class="alert alert-danger">
                {{session('message')}}
            </div>
            
            @endif
        <div class="mb-3">
          <label for="fullName" class="form-label">Full name</label>
          <input id="fullName" name="name" type="text" class="form-control" placeholder="Jane Doe" required>
          <div class="invalid-feedback">Please enter your name.</div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input id="email" name="email" type="email" class="form-control" placeholder="name@example.com" required>
          <div class="invalid-feedback">Please enter a valid email.</div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Phone</label>
          <input id="phone" name="phone" type="number" class="form-control" placeholder="+1 234678590" required>
          <div class="invalid-feedback">Please enter a valid Phone.</div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input id="password" name="password" type="password" class="form-control" placeholder="Create a password" required minlength="6">
          <div class="invalid-feedback">Please provide a password (min 6 characters).</div>
        </div>
        
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Role</label>
          <select name="role" id="role"class="form-control">
           <option value="" >Select Role</option>
           <option value="0">System Admin</option>
           <option value="1">Super Admin</option>
          </select>
        </div>

        <div class="mb-3 form-check">
          <input id="terms" class="form-check-input" type="checkbox" required>
          <label class="form-check-label small" for="terms">I agree to the <a href="#" class="text-decoration-none">terms and privacy</a></label>
          <div class="invalid-feedback">You must agree before continuing.</div>
        </div>

        <button class="btn btn-primary w-100" type="submit">Sign up</button>
      </form>

      <div class="text-center mt-3 small text-muted">
        Already have an account? <a href="{{ url('/admin-login') }}" class="link-primary">Sign in</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
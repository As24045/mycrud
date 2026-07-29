<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel CRUD - Insert Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Modern Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .card { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    .card-header { background: #007bff; color: white; border-radius: 15px 15px 0 0 !important; }
    .btn-primary { border-radius: 8px; padding: 10px 25px; }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center">
          <h3 class="mb-0">Registration Form</h3>
        </div>
        <div class="card-body p-4">

          <!-- Success Message -->
          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <form action="{{ url('mycrud.php') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Laravel CSRF Protection (Very Important) -->

            <!-- Name Field -->
            <div class="mb-3">
              <label for="name" class="form-label font-weight-bold">Full Name:</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter full name" name="name" value="{{ old('name') }}">
              @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-3">
              <label for="email" class="form-label">Email Address:</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
              @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <!-- Phone Field -->
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number:</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter phone number" name="phone" value="{{ old('phone') }}">
              @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <!-- Photo Field -->
            <div class="mb-3">
              <label for="photo" class="form-label">Profile Photo:</label>
              <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
              @error('photo') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary btn-block">Submit Data</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

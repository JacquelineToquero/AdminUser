<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Registration page">
  <meta name="author" content="Author">
  <title>Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      padding: 20px;
      width: 100%;
    }
    h1 {
      font-size: 1.5rem;
      margin-bottom: 20px;
      text-align: center;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .form-group .invalid-feedback {
      color: red;
      font-size: 0.875rem;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
    .text-center {
      text-align: center;
      margin-top: 20px;
    }
    a {
      color: #007bff;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Create an Account</h1>
    <form action="{{ route('register.save') }}" method="POST">
      @csrf
      <div class="form-group">
        <input name="name" type="text" class="@error('name')is-invalid @enderror" placeholder="Name">
        @error('name')
          <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <input name="email" type="email" class="@error('email')is-invalid @enderror" placeholder="Email Address">
        @error('email')
          <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <input name="password" type="password" class="@error('password')is-invalid @enderror" placeholder="Password">
        @error('password')
          <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <input name="password_confirmation" type="password" class="@error('password_confirmation')is-invalid @enderror" placeholder="Repeat Password">
        @error('password_confirmation')
          <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <button type="submit">Register Account</button>
    </form>
    <div class="text-center">
      <a href="{{ route('login') }}">Already have an account? Login</a>
    </div>
  </div>
</body>
</html>

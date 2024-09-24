<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
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
    .custom-control {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    .custom-control input {
      margin-right: 10px;
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
    .alert {
      background-color: #f8d7da;
      color: #721c24;
      padding: 10px;
      border: 1px solid #f5c6cb;
      border-radius: 4px;
      margin-bottom: 15px;
    }
    .alert ul {
      padding-left: 20px;
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome Back!</h1>
    <form action="{{ route('login.action') }}" method="POST">
      @csrf
      @if ($errors->any())
        <div class="alert">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="form-group">
        <input name="email" type="email" placeholder="Enter Email Address..." required>
      </div>
      <div class="form-group">
        <input name="password" type="password" placeholder="Password" required>
      </div>
      <div class="custom-control">
        <input name="remember" type="checkbox" id="customCheck">
        <label for="customCheck">Remember Me</label>
      </div>
      <button type="submit">Login</button>
    </form>
    <div class="text-center">
      <a href="{{ route('register') }}">Create an Account</a>
    </div>
  </div>
</body>
</html>

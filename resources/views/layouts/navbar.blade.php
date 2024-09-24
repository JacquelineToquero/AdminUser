<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Example</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f8f9fa;
    }
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .navbar .logo {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }
    .navbar .search {
      flex: 1;
      margin: 0 20px;
    }
    .navbar .search input {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .navbar .user-info {
      display: flex;
      align-items: center;
      color: #333;
    }
    .navbar .user-info img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-left: 10px;
    }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="logo">My App</div>
  <div class="search">
    <input type="text" placeholder="Search...">
  </div>
  <div class="user-info">
    <span>{{ auth()->user()->name }}</span>
    <br>
    <small>{{ auth()->user()->level }}</small>
    <img src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg" alt="Profile Picture">
  </div>
</nav>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }
    #wrapper {
      display: flex;
      min-height: 100vh;
    }
    #sidebar {
      background-color: #343a40;
      color: white;
      width: 250px;
      padding: 20px;
    }
    #content-wrapper {
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    #topbar {
      background-color: #007bff;
      padding: 10px;
      color: white;
      text-align: center;
    }
    .container-fluid {
      padding: 20px;
    }
    h1 {
      font-size: 1.75rem;
      margin-bottom: 20px;
      color: #333;
    }
    a {
      color: #007bff;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    #footer {
      text-align: center;
      padding: 10px;
      background-color: #343a40;
      color: white;
      margin-top: auto;
    }
    .scroll-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #007bff;
      color: white;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    .scroll-to-top:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
  
    <!-- Sidebar -->
    <div id="sidebar">
      @include('layouts.sidebar')
    </div>
    <!-- End of Sidebar -->
  
    <!-- Content Wrapper -->
    <div id="content-wrapper">
  
      <!-- Topbar -->
      <div id="topbar">
        @include('layouts.navbar')
      </div>
      <!-- End of Topbar -->
  
      <!-- Begin Page Content -->
      <div class="container-fluid">
  
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1>@yield('title')</h1>
        </div>
  
        @yield('contents')
  
      </div>
      <!-- /.container-fluid -->
  
      <!-- Footer -->
      <div id="footer">
        @include('layouts.footer')
      </div>
      <!-- End of Footer -->
  
    </div>
    <!-- End of Content Wrapper -->
  
  </div>
  <!-- End of Page Wrapper -->
  
  <!-- Scroll to Top Button-->
  <div class="scroll-to-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
    <i>&uarr;</i>
  </div>

</body>
</html>

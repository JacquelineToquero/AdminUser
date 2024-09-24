<ul class="sidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand" href="index.html">
      <div class="brand-icon"></div>
      <div class="brand-text">Admin</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <span>🏠 Dashboard</span>
      </a>
    </li>
    
   <!-- Nav Item - Products -->
   <li class="nav-item">
    <a class="nav-link" href="{{ route('user.index') }}">
      <span>📦 Product</span>
    </a>
  </li>
    
    <!-- Nav Item - Profile -->
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <span>👤 Profile</span>
      </a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Nav Item - Logout -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">
        <span>🚪 Logout</span>
      </a>
    </li>
    
</ul>

<style>
  .sidebar {
    background-color: #007bff;
    color: white;
    padding: 20px;
    width: 200px;
  }
  
  .sidebar-brand {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    color: white;
    text-decoration: none;
  }
  
  .brand-icon {
    font-size: 2rem;
    margin-right: 10px;
  }
  
  .brand-text {
    font-size: 1.25rem;
  }
  
  .sidebar-divider {
    border-top: 1px solid white;
    margin: 10px 0;
  }
  
  .nav-item {
    list-style-type: none;
  }
  
  .nav-link {
    display: flex;
    align-items: center;
    padding: 10px 0;
    color: white;
    text-decoration: none;
  }
  
  .nav-link span {
    margin-left: 5px;
  }
  
  .nav-link:hover {
    background-color: #0056b3;
    border-radius: 5px;
  }
  
  .sidebar-toggle {
    text-align: center;
    margin-top: 20px;
  }
  
  #sidebarToggle {
    background: none;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
  }
  
  #sidebarToggle:hover {
    color: #ccc;
  }
</style>

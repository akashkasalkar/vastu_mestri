<?php include './navbar.php' ?>
<div class="container-fluid page-body-wrapper">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="./home.php">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Manage Products</li>
    <li class="nav-item">
      <a class="nav-link" href="./viewCategory.php" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Categories</span>
        <i class="menu-arrow"></i>
      </a>

    </li>
    <li class="nav-item">
      <a class="nav-link" href="./viewProduct.php" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Products</span>
        <i class="menu-arrow"></i>
      </a>
    </li>

    <li class="nav-item nav-category">Manage Orders</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#manage-orders" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Orders</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="manage-orders">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="./newOrder.php">New Orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="./pendingOrder.php">Pending Orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="./rejectedOrder.php">Rejected Orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="./completedOrder.php">Completed Orders</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item nav-category">Manage Users</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#manage-users" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Users</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="manage-users">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="./viewUser.php">View Users</a></li>
          <li class="nav-item"> <a class="nav-link" href="./blockUser.php">Blocked Users</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item nav-category">Settings</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#manage-settings" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="manage-settings">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="./changePassword.php">Change Password</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
@extends('layouts.dashboard')

@section('title', 'Menu')

@section('sidebar')

<div class="aside-header">
    <a href="../../index.html" class="aside-logo">Lab<span>Q</span></a>
    <a href="" class="aside-menu-link">
      <i data-feather="menu"></i>
      <i data-feather="x"></i>
    </a>
  </div>
  <div class="aside-body">
    <div class="aside-loggedin">
      <div class="d-flex align-items-center justify-content-start">
        <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
        <div class="aside-alert-link">
          <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
          <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
          <a href="" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
        </div>
      </div>
      <div class="aside-loggedin-user">
        <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
          <h6 class="tx-semibold mg-b-0">Katherine Pechon</h6>
          <i data-feather="chevron-down"></i>
        </a>
        <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
      </div>
      <div class="collapse" id="loggedinMenu">
        <ul class="nav nav-aside mg-b-0">
          <li class="nav-item"><a href="" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
          <li class="nav-item"><a href="" class="nav-link"><i data-feather="user"></i> <span>View Profile</span></a></li>
          <li class="nav-item"><a href="" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
          <li class="nav-item"><a href="" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li>
          <li class="nav-item"><a href="" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
        </ul>
      </div>
    </div><!-- aside-loggedin -->
    <ul class="nav nav-aside">
      <li class="nav-label">Dashboard</li>
      <li class="nav-item active"><a href="dashboard-one.html" class="nav-link"><i data-feather="shopping-bag"></i> <span>Home</span></a></li>
      <li class="nav-item"><a href="dashboard-two.html" class="nav-link"><i data-feather="globe"></i> <span>Customer</span></a></li>
      <li class="nav-item with-sub">
        <a href="dashboard-four.html" class="nav-link"><i data-feather="life-buoy"></i> <span>Settings</span></a>
        <ul>
          <li><a href="page-profile-view.html">Menu</a></li>
          <li><a href="page-connections.html">Role</a></li>
          <li><a href="page-groups.html">Menu Test</a></li>
          <li><a href="page-events.html">Events</a></li>
        </ul>
      </li>
      <li class="nav-item with-sub">
        <a href="app-file-manager.html" class="nav-link"><i data-feather="file-text"></i> <span>Master</span></a>
        <ul>
          <li><a href="page-profile-view.html">Staff</a></li>
          <li><a href="page-connections.html">Client</a></li>
          <li><a href="page-groups.html">Doctor</a></li>
          <li><a href="page-events.html">Pasiens</a></li>
        </ul>
      </li>
      
      <li class="nav-label mg-t-25">Pages</li>
      <li class="nav-item with-sub">
        <a href="" class="nav-link"><i data-feather="user"></i> <span>User Pages</span></a>
        <ul>
          <li><a href="page-profile-view.html">View Profile</a></li>
          <li><a href="page-connections.html">Connections</a></li>
          <li><a href="page-groups.html">Groups</a></li>
          <li><a href="page-events.html">Events</a></li>
        </ul>
      </li>
      <li class="nav-item with-sub">
        <a href="" class="nav-link"><i data-feather="file"></i> <span>Other Pages</span></a>
        <ul>
          <li><a href="page-timeline.html">Timeline</a></li>
        </ul>
      </li>
    </ul>
  </div>
    
@endsection
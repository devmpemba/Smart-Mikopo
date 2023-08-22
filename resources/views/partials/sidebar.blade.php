  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a class="nav-link{{ request()->is('home') ? ' active' : '' }}" href="{{url('/home')}}">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ request()->is('home/loan-groups*') ? ' active' : '' }}" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-account-group menu-icon"></i></span>
          <span class="menu-title">Loans</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{'/home/loan-types'}}">Loan Types</a></li>

            <li class="nav-item"><a class="nav-link" href="{{'/home/plans'}}">Loan Plans</a></li>


            <li class="nav-item"><a class="nav-link" href="{{'/home/loan-groups'}}">Loan Groups</a></li>

            <li class="nav-item"><a class="nav-link" href="{{'/home/members'}}">Members</a></li>

            <li class="nav-item"><a class="nav-link" href="{{'/home/apply-loan'}}">Apply Loan</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Disbursment</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Payments</a></li>

          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#liability" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-bank  menu-icon"></i></span>
          <span class="menu-title">Liability</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="liability">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">New</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Returned</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Expired</a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
          <span class="menu-title">Members</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
          <span class="menu-title">Charts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">Tables</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
          <span class="menu-title">User Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Users </a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Roles </a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Permissions </a></li>
           
          </ul>
        </div>
      </li>
     
     

    </ul>
  </nav>
  <!-- partial -->
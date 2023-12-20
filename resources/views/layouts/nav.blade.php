<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Smart Mikopo</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ url('/home') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Loan Management</label>
                </li>

                <li class="nav-item {{ request()->is('home/apply-loan') ? 'active' : '' }}">
                    <a href="{{ url('/home/apply-loan') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Apply Loan</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('home/loan-types') ? 'active' : '' }}">
                    <a href="{{ url('/home/loan-types') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Loan Types</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('home/loan-groups') ? 'active' : '' }}">
                    <a href="{{ url('/home/loan-groups') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Loan Groups</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('home/loan-plans') ? 'active' : '' }}">
                    <a href="{{ url('/home/loan-plans') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Loan Plans</span>
                    </a>
                </li>
               
               
                <li class="nav-item pcoded-menu-caption">
                    <label>LOAN STATUS</label>
                </li>
                <li class="nav-item {{ request()->is('approved-loans') ? 'active' : '' }}">
                    <a href="{{ url('/approved-loans') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Approved Loans</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('pending-loans') ? 'active' : '' }}">
                    <a href="{{ url('/pending-loans') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                        <span class="pcoded-mtext">Pending Loans</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('completed-loans') ? 'active' : '' }}">
                    <a href="{{ url('/completed-loans') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Completed Loans</span>
                    </a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>LOAN PAYMENTS</label>
                </li>
                <li class="nav-item"><a href="chart-morris.html" class="nav-link {{ request()->is('completed-payments') ? 'active' : '' }}">
                        <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                        <span class="pcoded-mtext">Completed Payments</span>
                    </a>
                </li>
                <li class="nav-item"><a href="map-google.html" class="nav-link {{ request()->is('incomplete-payments') ? 'active' : '' }}">
                        <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                        <span class="pcoded-mtext">Incomplete Payments</span>
                    </a>
                </li>
                
                <li class="nav-item pcoded-menu-caption">
                    <label>LOAN COLLATERAL</label>
                </li>
               
                <li class="nav-item"><a href="sample-page.html" class="nav-link {{ request()->is('new-collateral') ? 'active' : '' }}">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">New Collateral</span>
                    </a>
                </li>
                <li class="nav-item"><a href="javascript:" class="nav-link {{ request()->is('all-collateral') ? 'active' : '' }}">
                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                        <span class="pcoded-mtext">All Collateral</span>
                    </a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>REPORTS</label>
                </li>
                <li class="nav-item"><a href="javascript:" class="nav-link {{ request()->is('daily-reports') ? 'active' : '' }}">
                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                        <span class="pcoded-mtext">Daily Reports</span>
                    </a>
                </li>
                <li class="nav-item"><a href="sample-page.html" class="nav-link {{ request()->is('weekly-reports') ? 'active' : '' }}">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Weekly Reports</span>
                    </a>
                </li>
                <li class="nav-item"><a href="javascript:" class="nav-link {{ request()->is('monthly-reports') ? 'active' : '' }}">
                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                        <span class="pcoded-mtext">Monthly Reports</span>
                    </a>
                </li>
                <li class="nav-item"><a href="javascript:" class="nav-link {{ request()->is('annual-reports') ? 'active' : '' }}">
                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                        <span class="pcoded-mtext">Annual Reports</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

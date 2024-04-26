<ul  class="navbar-nav bg-gradient-danger  sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-church" ></i> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
             

           
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $SITE_TITLE; ?></div>
    </a>
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a stylle="color: rgb(255,15,0);" class="nav-link" href="#dashboard"><i class="fas fa-fw fa-tachometer-alt"></i><span ><h6>Dashboard</h6></span></a>
    </li>
    <hr class="sidebar-divider">
    <!--<div class="sidebar-heading" ><h6>Master<h6></div>-->
    <!--<li class="nav-item"><a class="nav-link" href="#members"><i class="fas fa-fw fa-user-friends"></i><span><h6 >Customer</h6></span></a></li>-->
    
    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>MASTER</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#members"><i class="fas fa-fw fa-user-friends"></i><span><h6 >Customer</h6></span></a>
                        
                        
                         <a class="collapse-item" href="#item"><i class="fas fa-fw fa-user-friends"></i><span><h6>Item</h6></span></a>
                         <a class="collapse-item" href="#itemcat"><i class="fas fa-fw fa-user-friends"></i><span><h6>Item cat</h6></span></a>

                        <!--<a class="collapse-item" href="cards.html">Cards</a>-->
                    </div>
                </div>
    </li>
    
<!--   <div class="dropdown d-flex justify-content-center"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,22,78);width: 100%;">Dropdown </button>
    <div role="menu" class="dropdown-menu">
        <a role="presentation" class="dropdown-item" href="#rep">First Item</a>
        <a role="presentation" class="dropdown-item" href="#">Second Item</a>
        <a role="presentation" class="dropdown-item" href="#">Third Item</a>
    </div>
</div>    
     -->
    <li class="nav-item"><a class="nav-link" href="#order">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>


        <span><h6>Order</h6></span></a></li>

     <li class="nav-item"><a class="nav-link" href="#rep"><i class="fas fa-fw fa-user-friends"></i><span><h6>Representative</h6></span></a></li>
  



   <!--  <li class="nav-item"><a class="nav-link" href="#anniversaries"><i class="fas fa-fw fa-ring"></i><span> Anniversaries</span></a></li>
    <li class="nav-item"><a class="nav-link" href="#contacts"><i class="fas fa-fw fa-address-book"></i><span> Contacts</span></a></li>
 -->
    <!-- <hr class="sidebar-divider">
    <div class="sidebar-heading">Communication</div>
    <li class="nav-item"><a class="nav-link" href="#sms"><i class="fas fa-fw fa-sms"></i><span> SMS Notifications</span></a></li>
    <li class="nav-item"><a class="nav-link" href="#email"><i class="fas fa-fw fa-envelope"></i><span> Email Notifications</span></a></li>
 -->
<!--
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Addons
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>
-->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
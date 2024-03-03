<nav class="navbar navbar-expand-lg header-nav scroll-sticky">
    <div class="container">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="index.html" class="navbar-brand logo">
                <img src="{{asset('/frontend/')}}/assets/img/logo.svg" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="{{asset('/frontend/')}}/assets/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="has-submenu active">
                    <a class href="#">Home</a>                    
                </li>
                <li class="has-submenu">
                    <a href>Courses <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="instructor-course.html">My Course</a></li>
                        <li><a href="instructor-reviews.html">My Course2</a></li>
                        <li><a href="instructor-earnings.html">My Course3</a></li>
                        <li><a href="instructor-orders.html">My Course4</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href>Pages <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li>
                <li class="login-link">
                    <a href="login.html">Login / Signup</a>
                </li>
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item">
                <a class="nav-link header-sign" href="login.html">Signin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link header-login" href="register.html">Signup</a>
            </li>
        </ul>
    </div>
</nav>
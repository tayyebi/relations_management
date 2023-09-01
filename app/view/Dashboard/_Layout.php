<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?php echo _Root ?>app/assets/css/dashboard.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title><?php echo $Data['Title'] ?></title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
<<<<<<< HEAD
                <img src="https://gordarg.com/img/logo/Colorful.svg" alt="">
=======
                <img src="images/logo.png" alt="">
>>>>>>> 2410a16 (first commit)
            </div>

            <span class="logo_name">Administrators</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="<?php echo _Root ?>Dashboard">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="<?php echo _Root ?>Dashboard/Contents">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Contents</span>
                </a></li>
                <li><a href="<?php echo _Root ?>Dashboard/Content">
                    <i class="uil uil-paragraph"></i>
                    <span class="link-name">New Content</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="<?php echo _Root ?>Dashboard/Logout">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
			<!--VIEW_CONTENT-->
        </div>
    </section>

    <script src="<?php echo _Root ?>app/assets/js/dashboard.js"></script>
</body>
</html>
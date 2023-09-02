<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo _Root ?>app/assets/css/dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title><?php echo $Data['Title'] ?></title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="https://gordarg.com/img/logo/Colorful.svg" alt="">
            </div>

            <span class="logo_name"><?php echo _AppName?></span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="<?php echo _Root ?>Dashboard">
                    <i class="uil uil-dashboard"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>

                <li><a href="<?php echo _Root ?>Dashboard/Transaction">
                    <i class="uil uil-transaction"></i>
                    <span class="link-name">New Transaction</span>
                </a></li>

                <li><a href="<?php echo _Root ?>Dashboard/Transactions">
                    <i class="uil uil-history"></i>
                    <span class="link-name">Transactions</span>
                </a></li>
                
                <li><a href="<?php echo _Root ?>Dashboard/Accounts">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Accounts</span>
                </a></li>

                <li><a href="<?php echo _Root ?>Dashboard/Account">
                    <i class="uil uil-user"></i>
                    <span class="link-name">New Account</span>
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
            <img src="https://gordarg.com/img/logo/Outline.svg" alt="">
        </div>

        <div class="dash-content">
			<!--VIEW_CONTENT-->
        </div>
    </section>

    <script src="<?php echo _Root ?>app/assets/js/dashboard.js"></script>
</body>
</html>
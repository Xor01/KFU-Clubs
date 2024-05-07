<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
    <a class="navbar-brand" href="index.php">
        <img src="assets\university-svgrepo-com.svg" class="border-primary" style="width: 50px" />
        KFU-Clubs
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <?php if (!Auth::is_logged_in()):?>
                <li class="nav-item">
                <a class="nav-link" href="login.php">
                    Login
                    
                </a>
            </li>
            <?php endif?>
            <li class="nav-item">
                <a class="nav-link" href=""
                >DASHBOARD</a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clubs.php">Clubs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="announcements.php">Announcements</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="events.php">Events</a>
            </li>
        </ul>

        <?php if (Auth::is_logged_in()) :?>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    name
                </a>
                <div
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
        <?php endif?>
    </div>
</nav>

<?php 

$get_url = $_SERVER['REQUEST_URI'];


?>


 <script>
    $("#" + '<?php echo $get_url ?>').addClass('active');
 </script>
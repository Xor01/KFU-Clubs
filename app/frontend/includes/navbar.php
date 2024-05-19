<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
    <a class="navbar-brand" href="index.php">
        <img src="app\frontend\assets\university-svgrepo-com.svg" class="border-primary" style="width: 50px" />
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
            <?php if (!$user->isLoggedIn()):?>
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    Login
                </a>
            </li>
            <?php elseif ($clubManagement->isUerIsAnAdmin($user->data()->uid)) :?>
            <li class="nav-item">
                <a class="nav-link" href="applicant_management.php"
                >DASHBOARD</a
                >
            </li>
            <?php endif ?>
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

        <?php if ($user->isLoggedIn()):?>
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
                <?= $user->data()->username;?>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <?php $result = $clubManagement->isUerIsAnAdmin($user->data()->uid);
                    if ($result):?>
                    <a class="dropdown-item" href="applicant_management.php">Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <?php endif ?>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                <?php endif ?>
                </div>
            </li>
        </ul>
    </div>
</nav>
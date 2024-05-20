<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php">KFU Clubs</a>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <?php if($user->hasPermission('admin')):?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="create_club.php">
              <span data-feather="home"></span>
              Create Club
            </a>
          </li>
          <?php endif?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="applicant_management.php">
              <span data-feather="home"></span>
              View clubs Applicant
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create_announcement.php">
              <span data-feather="file"></span>
              Create Announcement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create_event.php">
              <span data-feather="shopping-cart"></span>
              Create Event
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event_applications.php">
              <span data-feather="users"></span>
              Events Applications
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="change_privileges.php">
              <span data-feather="users"></span>
              Edit Privileges
            </a>
          </li>
        
    </nav>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
<nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid">
  <a class="navbar-brand" href="<?php echo URLROOT ?>">
    <img src="<?php echo URLROOT."assets/imgs/restaurant.jpg" ?>" alt="" width="30" height="30">
    <span class="english ml-3 text-white ">Mori</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <?php if(getUserSession()) : ?>
        <li class="nav-item">
          <a class="nav-link text-white english" href="<?php echo URLROOT. 'admin/home' ?>">Admin Panel</a>
        </li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link text-white english" href="#">Features</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white english" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php if((getUserSession() != false)) : ?>
          <?php echo getUserSession()->name; ?>
          <?php else: ?>
          Member
          <?php endif; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php if((getUserSession() != false)) : ?>
            <a class="dropdown-item english" href="<?php echo URLROOT. 'user/logout' ?>">Logout</a>
          <?php else: ?>
            <a class="dropdown-item english" href="<?php echo URLROOT. 'user/login' ?>">Login</a>
            <a class="dropdown-item english" href="<?php echo URLROOT. 'user/register' ?>">Register</a>
          <?php endif; ?>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white english" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Languages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item english" href="#">PHP</a>
          <a class="dropdown-item english" href="#">Python</a>
          <a class="dropdown-item english" href="#">React</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

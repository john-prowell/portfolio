<nav class="navbar navbar-expand-md bg-body-tertiary fixed-top">
  <div class="container-fluid">
	<a class="navbar-brand" href="#">
      <img src="<?php echo get_template_directory_uri() . "/assets/images/photo.jpg" ?>" alt="John Prowell" width="52" height="52" class="d-inline-block align-text-top">
      <span>John Prowell</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">John Prowell</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#contact">Contact</a>
          </li>
        </ul>        
      </div>
    </div>
  </div>
</nav>
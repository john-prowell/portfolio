<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top eff-main-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/images/photo.jpg" ?>" alt="John Prowell" title="John Prowell" width="52" height="52">JOHN PROWELL
        </a>
        <button 
            id="eff_nav_toggler"
            class="navbar-toggler"  
            type="button" 
            data-bs-toggle="collapse"  
            data-bs-target="#navbarSupportedContent"   
            aria-controls="navbarSupportedContent"  
            aria-expanded="false"  
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 w-100 ps-5 d-flex justify-content-end">
                <li class="nav-item d-flex align-items-center"><a class="nav-link" href="#" onclick="close_offcanvas()">Home</a></li>
                <li class="nav-item d-flex align-items-center"><a class="nav-link" href="#about" onclick="close_offcanvas()">About</a></li>
                <li class="nav-item d-flex align-items-center"><a class="nav-link" href="#portfolio" onclick="close_offcanvas()">Portfolio</a></li>
                <li class="nav-item d-flex align-items-center"><a class="nav-link" href="#contact" onclick="close_offcanvas()">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
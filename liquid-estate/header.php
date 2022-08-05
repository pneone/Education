
<!DOCTYPE html>
<html >
<head>
  <meta charset="<?php bloginfo('charset');?> ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?> 
</head>
<body >

 
  <header class="header">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <?php the_custom_logo(); ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Marketplace</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>

          </ul>
          <a class="btn-white-link btn-link" href="#">
            <button class="btn-white ">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Word file.svg" alt="file">
              <div class="btn-title">Whitepaper</div>
            </button>
          </a>
        </div>
      </div>
    </nav>
  </header>
<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name')?><?php wp_title();?> <?php if (is_front_page()){ echo " | " , bloginfo('description');};?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Header */
body {
  font-family: "Poppins", sans-serif;
}

.header {
  background-color: #fff;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  margin-top: 12px;
}

.site-icon img {
  height: 30px;
}

.navbar ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.navbar li {
  position: relative;
  margin-left: 20px;
}

.navbar a {
  padding: 10px;
  text-decoration: none !important;
  color: #54595f;
  transition: color 0.3s;
}

.navbar li:hover > a {
  color: #F4AB6A;
}

/* Navbar Submenu */
.sub-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  padding: 10px;
  transition: opacity 0.3s, transform 0.3s;
  opacity: 0;
  transform: translateY(-10px);
  min-width: 150px;
  z-index: 1;
  visibility: hidden;
}

.navbar li:hover > a + .sub-menu {
  display: block;
  opacity: 1;
  transform: translateY(0);
  visibility: visible;
}

.sub-menu li {
  display: block;
  margin-bottom: 5px;
}

.sub-menu a {
  display: block;
  padding: 5px;
  text-decoration: none;
  color: #54595f;
  transition: background-color 0.3s;
}


  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <?php wp_head();?>
</head>
<body <?php body_class()?> >
  <header class="header">
    <div class="site-icon">
    <a href="<?php echo get_site_url(); ?>">
            <?php $logoimg = get_header_image(); ?>
            <img src="<?php echo $logoimg; ?>" alt="Site Icon" height="30">
          </a>
    </div>
    <nav class="navbar">
    <?php
            wp_nav_menu(array('theme_location'=>'primary-menu'))
          ?>
    </nav>
  </header>

  <!-- Your page content here -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

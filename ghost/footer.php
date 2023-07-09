<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/592c294de1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Footer styles */
  footer {
    background-color: #F4AB6A;
    color: #fff;
    padding: 20px;
    font-family: "Poppins", sans-serif;
  }
  footer .container {
    max-width: 1200px;
    height: 248px;
  }
  footer .row {
    align-items: space-between;
  }
  footer .col {
    text-align: center;
  }
  footer img {
    margin-bottom: 20px;
  }
  footer h3 {
    font-size: 18px;
    margin-bottom: 10px;
  }
  footer ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  footer ul li {
    display: inline-block;
    margin-right: 15px;
  }
  footer ul li:last-child {
    margin-right: 0;
  }
  footer ul li a {
    color: #fff;
    text-decoration: none;
    padding: 8px;
  }
  footer ul li a:hover {
    color: #54595f;
  }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <footer>
    <div class="container">
      <div class="row">
        <!-- Left column: Website title image and heading -->
        <div class="col">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/site-icon-2.png" alt="Website Title" height="30">
          </a>
          <h3>Software Engineer</h3>
        </div>
        
        <!-- Center column: Navbar links -->
        <div class="col">
          <ul>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        
        <!-- Right column: Social icons -->
        <div class="col">
          <ul>
            <li><i class="fa-brands fa-facebook fa-xl"></i></li>
            <li><i class="fa-brands fa-instagram fa-xl"></i></li>
            <li><i class="fa-brands fa-whatsapp fa-xl"></i></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php wp_footer();?>
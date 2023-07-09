<?php 
//Template Name:Home
the_post();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Colorful Homepage (Bootstrap)</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: "Poppins", sans-serif;
    }
    
    .sidebar {
      background-color: #fff8f2;
      color: #333;
      padding: 20px;
      /* top: 0; */
      left: 0;
      width: 250px;
    }
    .sidebar a{
      color: #333;
    }
    
    .sidebar .logo {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #333;
    }
    
    .sidebar .widget {
      list-style: none;
      padding: 0;
      margin: 0;
      
    }
    
    .sidebar .wp-block-pages-list__item{
      margin-bottom: 10px;
    }
    .sidebar .wp-block-latest-posts{
      text-decoration: none;
      color: #333;
      align-items: center;
      transition: opacity 0.3s;
    }
    .sidebar .wp-block-latest-posts li{
      padding: 10px;
    }
    .sidebar .wp-block-latest-posts a{
text-decoration: none;
    }
    .sidebar .wp-block-pages-list__item a {
      text-decoration: none;
      color: #333;
      display: flex;
      align-items: center;
      transition: opacity 0.3s;
    }
    
    .sidebar .wp-block-pages-list__item a:hover {
      opacity: 0.7;
      color: #F4AB6A;
    }
    .sidebar .wp-block-latest-posts a:hover {
      opacity: 0.7;
      color: #F4AB6A;
    }
    
    .content {
      padding: 40px;
    }
    
    .content h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 20px;
    }
    
    .content p {
      color: #666;
      line-height: 1.6;
    }
    
    .blog-posts .card {
      margin-bottom: 20px;
      transition: transform 0.3s;
    }
    
    .blog-posts .card:hover {
      transform: translateY(-5px);
    }
    
    .blog-posts .card h2 {
      font-size: 1.5rem;
      color: #333;
      margin-bottom: 10px;
    }
    
    .blog-posts .card p {
      color: #666;
    }
  </style>
</head>
<body>
    <?php get_header();?>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="sidebar">
          <?php dynamic_sidebar('sidebar')?>
        </div>
      </div>
      
      <div class="col-md-9 content">
        <h1>Welcome to Our Website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius eros at ex maximus, in suscipit lacus mattis. Nam euismod ipsum in erat fringilla, vitae dapibus magna efficitur. Mauris maximus fermentum justo, vitae tempus lectus varius at. Ut hendrerit tellus mauris, id consectetur nisi laoreet id. Donec nec elementum mauris. Phasellus lacinia, dolor at gravida ullamcorper, est lectus fringilla urna, sit amet egestas eros felis eget mi.</p>
        <div class="blog-posts">
        <h2>News</h2>
          <?php
          $wpnews= array(
          'post_type'=>'news',
          'post_status'=>'publish'
          );
          $query = new WP_Query($wpnews);
          while($query->have_posts()){
          $query->the_post();
          $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          ?>
          <div class="card " style="width: 50rem;">
            <div class="card-body">
              <h2 class="card-title"><?php the_title() ?></h2>
              <p class="card-text"><?php the_excerpt()?></p>
              <a href="<?php the_permalink();?>" class="post-read-more">Read More</a>
            </div>
          </div>
          <?php
            }
            ?>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

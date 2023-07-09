<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Blog page styles */
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f1f1f1;
    }
    .blog-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 50px;
    }
    .blog-post {
      margin-bottom: 50px;
    }
    .blog-post .post-image {
      overflow: hidden;
      border-radius: 5px;
    }
    .blog-post .post-image img {
      width: 100%;
      height: auto;
    }
    .blog-post .post-content {
      margin-top: 20px;
    }
    .blog-post .post-title {
      font-size: 24px;
      color: #333;
      margin-bottom: 10px;
    }
    .blog-post .post-meta {
      color: #777;
      font-size: 14px;
    }
    .blog-post .post-content p {
      margin-bottom: 10px;
    }
    .blog-post .post-read-more {
      color: #007bff;
      font-weight: bold;
      transition: color 0.3s;
    }
    .blog-post .post-read-more:hover {
      color: #0056b3;
      text-decoration: none;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <?php
  get_header();
  ?>
  <div class="blog-container">
    <?php
    while(have_posts()){
      the_post();
      $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
      ?>
      <div class="blog-post">
        <div class="post-image">
          <img src="<?php  echo $imagePath[0]?>" alt="Blog Post 1">
        </div>
        <div class="post-content">
          <h2 class="post-title"><?php the_title() ?></h2>
          <p class="post-meta">Published on <?php the_date()?></p>
          <p><?php the_excerpt()?></p>
          <a href="<?php the_permalink();?>" class="post-read-more">Read More</a>
        </div>
      </div>
    <?php
    }
    ?>
    <!-- Add more blog posts as needed -->
    <?php   wp_pagenavi();?>
  </div>
  <?php
  get_footer();
  ?>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

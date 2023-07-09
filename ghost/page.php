<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Main content styles */
    main {
      padding: 50px;
      font-family: "Poppins", sans-serif;
    }
    main h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    main p {
      font-size: 16px;
      line-height: 1.6;
    }
    main a{
        color: #333;
        font-family: "Poppins", sans-serif;
        text-decoration: none !important;
    }
    main a:hover{
        color: #F4AB6A;
    }
    main .page-location {
      text-align: right;
      font-size: 14px;
      color: #777;
      margin-bottom: 20px;
    }
    main .page-location span {
      color: #333;
      font-weight: bold;
    }
    .wp-block-gallery{
        display: flex;
    }
    .wp-block-image img{
        margin: 10px;
        width: 90% !important;
        height: 90% !important;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <?php get_header() ?>
  <main>
    <div class="container">
      <div class="page-location">
        <span><a href="<?php echo site_url(); ?>">Home</a></span> / <?php the_title() ?>
      </div>
      <h2><?php the_title() ?></h2>
      <?php the_post_thumbnail('medium'); ?>
      <div class="about-content">
        <?php the_content();?>
      </div>
    </div>
  </main>
  
  <?php get_footer() ?>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

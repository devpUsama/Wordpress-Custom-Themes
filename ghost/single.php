<?php 
get_header();
the_post();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Single post detail page styles */
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f1f1f1;
    }
    .single-post-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 50px;
      background-color: #fff;
      border-radius: 5px;
    }
    .single-post .post-image {
      overflow: hidden;
      border-radius: 5px;
    }
    .single-post .post-image img {
      width: 100%;
      height: auto;
    }
    .single-post .post-content {
      margin-top: 20px;
    }
    .single-post .post-title {
      font-size: 24px;
      color: #333;
      margin-bottom: 10px;
    }
    .single-post .post-meta {
      color: #777;
      font-size: 14px;
    }
    .single-post .post-content p {
      margin-bottom: 10px;
    }
    .single-post .post-read-more {
      color: #007bff;
      font-weight: bold;
      transition: color 0.3s;
    }
    .single-post .post-read-more:hover {
      color: #0056b3;
      text-decoration: none;
    }
    .comment-form {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f1f1f1;
  border-radius: 5px;
}

.comment-form label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

.comment-form input[type="text"],
.comment-form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 20px;
}

.comment-form textarea {
  resize: vertical;
  min-height: 150px;
}

.comment-form input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.comment-form input[type="submit"]:hover {
  background-color: #0056b3;
}

  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="single-post-container">
    <div class="single-post">
      <div class="post-image">
       <?php $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
        <img src="<?php echo $imagePath[0];?>" alt="Blog Post 1">
      </div>
      <div class="post-content">
        <h2 class="post-title"><?php the_title();?></h2>
        <p class="post-meta">Published on <?php the_date();?></p>
        <p class="post-meta">By <?php the_author();?></p>
        <p><?php echo the_content();?></p>
        <a href="#" class="post-read-more">Back to Blog</a>
      </div>
    </div>
    <?php comments_template();?>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php 
get_footer();
?>
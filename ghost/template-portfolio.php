<?php  
//Template Name:Portfolio
get_header();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Portfolio page styles */
    body {
      font-family: "Poppins", sans-serif;
    }
    .portfolio-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 50px;
    }
    .portfolio-title {
      text-align: center;
      font-size: 24px;
      margin-bottom: 30px;
      color: #333;
    }
    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 30px;
    }
    .portfolio-item {
      position: relative;
      overflow: hidden;
      border-radius: 5px;
    }
    .portfolio-item img {
      width: 100%;
      height: auto;
      transition: transform 0.3s ease;
    }
    .portfolio-item:hover img {
      transform: scale(1.1);
    }
    .portfolio-item-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .portfolio-item:hover .portfolio-item-overlay {
      opacity: 1;
    }
    .portfolio-item-overlay-content {
      text-align: center;
      color: #fff;
    }
    .portfolio-item-title {
      font-size: 18px;
      margin-bottom: 10px;
    }
    .portfolio-item-category {
      font-size: 14px;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="portfolio-container">
    <div class="portfolio-title">Portfolio</div>
    <div class="portfolio-grid">
      <div class="portfolio-item">
        <img src="portfolio-item-1.jpg" alt="Portfolio Item 1">
        <div class="portfolio-item-overlay">
          <div class="portfolio-item-overlay-content">
            <div class="portfolio-item-title">Project Title 1</div>
            <div class="portfolio-item-category">Web Design</div>
          </div>
        </div>
      </div>
      <div class="portfolio-item">
        <img src="portfolio-item-2.jpg" alt="Portfolio Item 2">
        <div class="portfolio-item-overlay">
          <div class="portfolio-item-overlay-content">
            <div class="portfolio-item-title">Project Title 2</div>
            <div class="portfolio-item-category">Graphic Design</div>
          </div>
        </div>
      </div>
      <div class="portfolio-item">
        <img src="portfolio-item-3.jpg" alt="Portfolio Item 3">
        <div class="portfolio-item-overlay">
          <div class="portfolio-item-overlay-content">
            <div class="portfolio-item-title">Project Title 3</div>
            <div class="portfolio-item-category">Photography</div>
          </div>
        </div>
      </div>
      <!-- Add more portfolio items as needed -->
    </div>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php
get_footer();
?>
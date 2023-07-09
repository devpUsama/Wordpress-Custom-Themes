
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f5f5f5;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    
    .container {
      text-align: center;
    }
    
    .error-code {
      font-size: 6rem;
      font-weight: 500;
      color: #333;
      margin-bottom: 30px;
      animation: scaleIn 1s ease-in-out;
    }
    
    .error-message {
      font-size: 2rem;
      color: #777;
      margin-bottom: 40px;
      animation: fadeIn 1.5s ease-in-out;
    }
    
    .home-link {
      color: #007bff;
      text-decoration: none;
      font-size: 1.2rem;
      animation: fadeIn 2s ease-in-out;
    }
    
    .home-link:hover {
      text-decoration: underline;
    }
    
    @keyframes scaleIn {
      0% {
        transform: scale(0);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }
    
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>
<body>


  <div class="container">
  <?php
get_header();
?>
    <h1 class="error-code">404</h1>
    <p class="error-message">Oops! The page you're looking for cannot be found.</p>
    <a href="/" class="home-link">Go back to home page</a>
    <?php get_footer();?>
  </div>
  
</body>
</html>



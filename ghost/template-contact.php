<?php 
//Template Name:Contact Us

get_header();
?>

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
    main .contact-form {
      max-width: 400px;
      margin: 0 auto;
    }
    main .form-group {
      margin-bottom: 20px;
    }
    main .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    main .form-group input,
    main .form-group textarea {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 4px;
      border: 1px solid #F4AB6A;
    }
    main .form-group textarea {
      height: 150px;
    }
    main .form-group button {
      background-color: #F4AB6A;
      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    main .form-group button:hover {
      background-color: #ff8b23;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <main>
    <div class="container">
      <h2>Contact Us</h2>
      <p>Please fill out the form below to get in touch with us.</p>
      
      <form class="contact-form">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        
        <div class="form-group">
          <button type="submit">Send Message</button>
        </div>
      </form>
    </div>
  </main>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php
get_footer();
?>
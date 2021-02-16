<?php include "includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harsh Prasad</title>
    <link rel="icon" type="image/png" href="images/icons/web-icon.png">
    <link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<?php

  if(isset($_POST['submit'])){
    $to = "harsh@harshprasad.com";
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = "From: " .$_POST['email'];
    $phone = $_POST['phone'];

    mail($to, $name, $message, $email);

    $query = "INSERT INTO contact(name, email, phone, message) VALUES('{$name}','{$email}','{$phone}','{$message}')";

    $create_query = mysqli_query($connection, $query);

    if(!$create_query){
      die("QUERY FAILED" . mysqli_error($connection));
    }

  }

?>




<!--<div class="loader">-->
<!--		<div class="inner"></div>-->
<!--</div>-->

<nav id="navigation" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php"><img src="images/icons/web-icon-2.ico"  alt="logo"></a>
  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Stats</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Portfolio</a>
            </li>
          </ul>
        </div>
  
</nav>

<div class="container">
<section>
<div class="container">
  <div class="">
    <div class="col-xs-12 col-xs-offset-6">
    <div class="text-center">
      <!-- <form id="contactForm"> -->
        <span>
          <br>
          <br>
          <h1 class="heading-font">Send me a Message, I'll get back to you within 24 hours.</h1>
          
          <?php
            if(isset($_POST['submit'])){
                echo "<span id='para-style-1' class='successForm'>Your message has been sent succesfully!</span>";
            }
          ?>
          
        </span>
        <br>
      <form id="contactForm" method="post" action="">
        <div class="form-group" data-validate="Please enter your name">
          <input class="form-control" type="text" name="name" placeholder="Full Name*" required>
        </div>

        <div class="form-group" data-validate = "Please enter your email: e@a.x">
          <input class="form-control" type="email" name="email" placeholder="E-mail*" required>
        </div>

        <div class="form-group" data-validate = "Please enter your phone">
          <input class="form-control" type="text" name="phone" placeholder="Phone">
        </div>

        <div class="form-group" data-validate = "Please enter your message">
          <textarea class="form-control" name="message" placeholder="Your Message*" rows="10" cols="5" required></textarea>
        </div>

        <div class="form-group">
          <input type="submit" value="Send" name="submit" class="contactButton2">
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
</section>
</div>

<div class="copyrightSection">

		<div class="col-md-12 text-center">
			<p>&copy; Copyright Harsh Prasad 2020</p>
		</div>

</div>


    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/countUp.js"></script>
    <script src="js/countUp-jquery.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="https://kit.fontawesome.com/0f64139153.js" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://unpkg.com/isotope-layout@3.0.5/dist/isotope.pkgd.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK SALOON AND SPA</title>
    <style>
    .main-container {
    border: 5px dashed white;
    margin: 0 5%;
    }
    .top-nav {
    background-color: black;
    padding-top: 25px;
    padding-bottom: 25px;
    text-align: right;
    }
    .top-nav a {
    padding-right: 30px;
    text-decoration: none;
    }
    .top-nav a:visited{
    color: green;
    }
    .top-nav :active{
    color: blueviolet;
    }
    .top-nav a:hover{
    color:gray;
    }
    .top-nav h4{
      text-align:left;
      color: white;
    }
    .core-values{
        background-color:burlywood;
    }
    .core-values p {
     text-align: left;
     text-size-adjust: 5px;
    }
    footer {
    margin: 0%;
    padding: 10px;
    background-color: skyblue;
    }
    </style>
</head>
<body>
<div class="main-container">
    <!--NavBar section -->
    <nav>
      <div class="top-nav">
      <h4>MK SALON AND SPA</h4>
        <a href="index.blade.php">Home</a>
        <a href="about.blade.php" action="{{route('about')}}">About</a>
        <a href="contact.blade.php">Contact us</a>
        <a href="login.blade.php">Book session</a>
      </div>
    </nav>
    <br><br>
    <section>
    <p>MK Salon and Spa has been in business since 2012.We begun as a salon and in 2015 we opened the Spa.
        It has been a long changing journey from the start to where we are right now. I'm proud to say we have achieved alot and hope to achieve even more and be one of the best in the world.
         </p>
    </section>

     
        <div class="m1">
          <h2 class="core-values"> Our Core Values</h2>
        </div>
          <p>
            COOPERATION: 'Sharing and learning together'. Cooperation is working together in a team, contributing and
            sharing in a helpful way.
            ACHIEVEMENT: 'Persist and try your best'. ...
            RESPECT: 'Respect each other and our environment'. ...
            EMPATHY: 'Treat others with care and compassion'.
          </p>
        
      
      <br><br>
      
      <section>
      <h3 class="core-values">MK salon and Spa rankings</h3>
      <br>
      <div class="flex-container">
        <div class="main-achivement">
          <h2>#15</h2>
          <p> Top new upcoming Salon and Spa</p>
        </div>
        <div class="main-achivement">
          <h2>#4</h2>
          <p>Top best customer service and hospitality</p>
        </div>
        <div class="main-achivement">
          <h2>#8</h2>
          <p>Top cleanest environment </p>
        </div>
      </div>
    </section>


         <!-- Footer Section -->
    <footer>
      <div class="flex-container">
        <div class="footer-items">
          <p>&copy;All rights reserved</p>
        </div>
    </footer>
</div>
</body>
</html>
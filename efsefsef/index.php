<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <title>Pepsi</title>
  </head>

  <body>
    <section class="sec">
      <header>
        <div class="nav">
          <div class="rotate">
            <a href="#"
              ><img src="./images/logo.png" alt="logo" class="logo" />
            </a>
          </div>

          <div class="menu-icons open">
            <i class="ion-navicon-round"></i>
          </div>

          <ul class="nav-list">
            <div class="menu-icons close">
              <i class="ion-close-round"></i>
            </div>

            <li class="nav-item">
              <a class="nav-link" href="#"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html"> Products </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> What's New </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Newsletter </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Contact </a>
            </li>
            <li><a href="register.php">Sing in</a></li>
          </ul>
        </div>
      </header>
      <div class="content">
        <div class="textBox">
          <img src="images/nfl2020_logo.png" alt="offical pepsi" />
          <h2>That's what<br /><span>I like</span></h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Consequatur blanditiis vitae minus adipisci! Excepturi iste
            perferendis alias minima corporis molestiae odio molestias eveniet
            maxime deserunt Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Quos veritatis consequatur iure labore molestiae.
          </p>
          <a href="#" class="special-button">View All Products</a>
        </div>
        <div class="imgBox">
          <img src="./images/pepsi001.png" class="pepsi" data-tilt />
        </div>
      </div>
      <ul class="thumb">
        <li>
          <img
            src="./images/pepsi001.png"
            onclick="slider('pepsi001.png'); changeBg('#0062be')"
          />
        </li>

        <li>
          <img
            src="./images/pepsi002.png"
            onclick="slider('pepsi002.png'); changeBg('#e60c2c')"
          />
        </li>

        <li>
          <img
            src="./images/pepsi003.png"
            onclick="slider('pepsi003.png'); changeBg('#1e1e1e')"
          />
        </li>
      </ul>

      <ul class="social">
        <li>
          <a href="#"><img src="./images/facebook.png" /></a>
        </li>
        <li>
          <a href="#"><img src="./images/instagram.png" /></a>
        </li>
        <li>
          <a href="#"><img src="./images/twitter.png" /></a>
        </li>
      </ul>
    </section>
  </body>
</html>

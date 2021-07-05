<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Login required";
	  $color="darkblue";
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
	    <script src="source/js/loginValidate.js"></script>
        <script src="slideshow.js"></script>
		 <link rel="stylesheet" type="text/css" href="loginstyle.css">
        <title>School Management System</title>
    </head>
    <body>
	
			

              <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="module/images/home.jpeg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="module/images/banner.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="modiule/images/s21.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

            <center>
	          <img src="module/images/banner.jpg" />
              
	          <hr/>
              <?php echo "<font size='10' color='$color'>$login_message</font>";?>
            </center>
            <div>
            <form  action="service/check.access.php" onsubmit="return loginValidate();" method="post" class="login_form"><br/>
            
                
                 <h3>
                    <p>
                        <label>Username</label><br />
                        <input type="text" class="form-control" id="myid" name="myid" placeholder="Login ID" autofocus=""   /><br />
                    </p>
                 

                    <p>
                         <label>Password</label><br />
                        <input type="password" class="form-control" id="mypassword" name="mypassword" placeholder="Password"  /><br />
                    </p>

                    <p>
                        <button type="submit" class="btn btn-success" >Login</button>
                    </p>
                </h3>
            </form>
            </div>
        
	
    </body>
</html>

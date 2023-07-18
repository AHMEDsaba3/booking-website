<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/x-icon" href="photo\logo.png">
    <link rel="stylesheet" href="project.css">
	<link rel="stylesheet" href="project2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<style>
  
  footer{
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:initial;
  color:white;
  text-align: center;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourRest</title>
</head>
<body>
        <div class="navbar" role="navigation">
							<ul class="navvv" >
								<li id="navr" style="float: left;"><div id="logo" style="background-color: initial;"><a class="navv" href="project.php" style="background-color:inherit;"><img  src="photo\logo.png" alt="logo" height="40" width=auto style="margin: 0px;"></a></div></li>
								<li id="navr" style="padding: 10px;"><a class="navv" href="contact.html" >Contact</a></li>
								<li id="navr" style="padding: 10px;"><a class="navv" href="about.html">About</a></li>
								<li id="navr" style="padding: 10px;"><a class="navv" href="story.html">Story</a></li>
								<li id="navr" style="padding: 10px;"><a class="navv" class="dropbtn" href="hotels.php">Accommodations</a></li>
							    <li id="navr" class="dropdown" style="padding: 10px;">
								<a class="navv" class="dropbtn" href="#">Travel</a>
								<div class="dropdown-content">
								  <a class="navv" href="travel.html">Trips</a>
								  <a class="navv" href="car.html">Car Rentals</a>
								</div>
						        </li>
							<li style="padding: 10px;"><a class="navv" href="project.php" style="background-color: #5200e0; border-radius: 10px;" id="navr">Home</a></li>
							</ul>
						</div>
		<!-- ------------------------------------------ -->

	

	<div class="slide">
		<div class="slideshow-container">
			<div class="mySlides fade">
			  <img src="photo\pexels-spencer-davis-4356144.jpg" style="width:100%">
			  <div class="text">Egypt, Pyramid</div>
			</div>
			<div class="mySlides fade">
			  <img src="photo\pexels-yovan-verma-2082103.jpg" style="width:100%">
			  <div class="text">France, Eiffel Tower</div>
			</div>
			<div class="mySlides fade">
			  <img src="photo\pexels-pixabay-38238.jpg" style="width:100%">
			  <div class="text">South Asia, Maldives</div>
			</div>
			<div class="mySlides fade">
				<img src="photo\wallpaperflare.com_wallpaper (3).jpg" style="width:100%">
				<div class="text">Russia, Moscow</div>
			  </div>
			  <div class="mySlides fade">
				<img src="photo\wallpaperflare.com_wallpaper (2).jpg" style="width:100%">
				<div class="text">Itali, Leaning tower of pisa</div>
			  </div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		  </div>
		  <br>
		  <div style="text-align:center" >
			<span class="dot" onclick="currentSlide(0)"></span>
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
		  </div>

	</div>
<?php
if (isset($_SESSION["email"]) == 0) {
	?>

			<!-- ------------------------------------------ -->
			<ul class="sl" >
			<li class="ssignUp">
			<!-- Button to open the modal -->
<button class="buS" onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content2 animate" action="signup.inc.php" method="post">
    <div class="container">
      <h1 style="color: aliceblue;">Sign Up</h1>
      <p style="color: darkgray;">Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input class="sign" type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="psw"><b>Password</b></label>
      <input class="sign" type="password" placeholder="Enter Password" name="psw" id="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input id="passrepeat" class="sign" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a class="sss" href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button class="buS" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button class="buS" type="submit" class="signup" name="submit" id="submit">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</li>

<li class="ssignUp">
	<!-- Button to open the modal login form -->
<button class="buL" onclick="document.getElementById('id012').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id012" class="modal2">
  <span onclick="document.getElementById('id012').style.display='none'"
class="close2" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content2 animate" action="login.inc.php" method="post">
    <div class="imgcontainer2">
      <img src="photo/logo.png" alt="Avatar" class="avatar" style="width: auto; height: 120px;">
    </div>

    <div class="container2">
		<label id="status" style="color: red"> <br></label>
		<label for="uname"><b>Email</b></label>
      <input id="uname" class="log" type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input id="psw" class="log" type="password" placeholder="Enter Password" name="psw" required>

      <button id="loginBtn" class="buL" type="submit" name="loginBtn">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
    </div>

    <div class="container2" >
      <button class="buL" type="button" onclick="document.getElementById('id012').style.display='none'" class="cancelbtn2">Cancel</button>
      <span class="psw2"><a class="lll" href="#" style="color: aliceblue;">Forgot password?</a></span>
    </div>
  </form>
</div>
</li>

</ul>
	<?php
}
		else{
			echo "...";
		}
	?>
</p>
<!-- ---- -->

<footer>
<p>Copyright @ TourRest 2023</p>
</footer>
<script src="project.js"></script>
<script src="project2.js"></script>
</body>

</html>
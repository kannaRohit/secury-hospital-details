  <?php
  session_start();
  ?>
<!DOCTYPE html>
<html>

<head>
	<title>welcome to Hospital Management</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Lively Chat Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
<script language="JavaScript" type="text/javascript" src="code/jsbn.js"></script>
<script language="JavaScript" type="text/javascript" src="code/jsbn2.js"></script>
<script language="JavaScript" type="text/javascript" src="code/prng4.js"></script>
<script language="JavaScript" type="text/javascript" src="code/rng.js"></script>
<script language="JavaScript" type="text/javascript" src="code/rsa.js"></script>
<script language="JavaScript" type="text/javascript" src="code/rsa2.js"></script>
<script language="JavaScript">
  var n="a5261939975948bb7a58dffe5ff54e65f0498f9175f5a09288810b8975871e99\naf3b5dd94057b0fc07535f5f97444504fa35169d461d0d30cf0192e307727c06\n5168c788771c561a9400fb49175e9e6aa4e23fe11af69e9412dd23b0cb6684c4\nc2429bce139e848ab26d0829073351f4acd36074eafd036a5eb83359d2a698d3";
  var e="10001";
  var d="8e9912f6d3645894e8d38cb58c0db81ff516cf4c7e5a14c7f1eddb1459d2cded\n4d8d293fc97aee6aefb861859c8b6a3d1dfe710463e1f9ddc72048c09751971c\n4a580aa51eb523357a3cc48d31cfad1d4a165066ed92d4748fb6571211da5cb1\n4bc11b6e2df7c1a559e6d5ac1cd5c94703a22891464fba23d0d965086277a161";
  var p="d090ce58a92c75233a6486cb0a9209bf3583b64f540c76f5294bb97d285eed33\naec220bde14b2417951178ac152ceab6da7090905b478195498b352048f15e7d";
  var q="cab575dc652bb66df15a0359609d51d1db184750c00c6698b90ef3465c996551\n03edbf0d54c56aec0ce3c4d22592338092a126a0cc49f65a4a30d222b411e58f";
  var dmp1="1a24bca8e273df2f0e47c199bbf678604e7df7215480c77c8db39f49b000ce2c\nf7500038acfff5433b7d582a01f1826e6f4d42e1c57f5e1fef7b12aabc59fd25";
  var dmq1="3d06982efbbe47339e1f6d36b1216b8a741d410b0c662f54f7118b27b9a4ec9d\n914337eb39841d8666f3034408cf94f5b62f11c402fc994fe15a05493150d9fd";
  var coeff="3a3e731acd8960b7ff9eb81a7ff93bd1cfa74cbd56987db58b4594fb09c09084\ndb1734c8143f98b602b981aaa9243ca28deb69b5b280ee8dcee0fd2625e53250";

function do_encrypt() {
  var before = new Date();
  var rsa = new RSAKey();
  rsa.setPublic(n,e);
    
var res1 = rsa.encrypt(document.rsatest.t1.value);
var res2 = rsa.encrypt(document.rsatest.t2.value);
var res3 = rsa.encrypt(document.rsatest.t3.value);
//var res4 = rsa.encrypt(document.rsatest.t6.value);
//var res5 = rsa.encrypt(document.rsatest.t8.value);
    
  var after = new Date();
  if(res1) {
    document.rsatest.t1.value = linebrk(res1, 64);
    do_status("Encryption Time: " + (after - before) + "ms");
  }
  if(res2) {
    document.rsatest.t2.value = linebrk(res2, 64);
    do_status("Encryption Time: " + (after - before) + "ms");
  }
  if(res3) {
    document.rsatest.t3.value = linebrk(res3, 64);
    do_status("Encryption Time: " + (after - before) + "ms");
  }
//  if(res4) {
//    document.rsatest.t6.value = linebrk(res4, 64);
//    do_status("Encryption Time: " + (after - before) + "ms");
//  }
//  if(res5) {
//    document.rsatest.t8.value = linebrk(res5, 64);
//    do_status("Encryption Time: " + (after - before) + "ms");
//  }
}
    
</script>
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="top_menu_w3layouts">

			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> 1143 New York, USA</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1><span class="fa fa-comments-o" aria-hidden="true"></span>CURATIVE  <label>For A Better Treatment</label></h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.html">Home</a></li>
								<li><a href="login_action.php">Send Details</a>
								</li>
								<li><a href="mail.php">View Details</a>
								</li>
								<li><a href="/mail2/demo/key_gen.php">Key Generation</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="mail.html">Mail Us</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div class="banner_inner_content_agile_w3l">
		<p><h1 style="text-align: center;color: white;">Welcome </h1></p>
	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3ls">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="index.html">Home</a><span>|</span></li>
				<li><a href="index.html">logout</a><span>|</span></li>
				<li><a href=""><?php echo $_SESSION["mail"];?></a></li>
			</ul>
		</div>
	</div>
<div class="container">
	<div class="row">
	<center><p style="color:blue">PATIENTS DETAILS</p></center>
	<form action="sent.php" name="rsatest" method="post">
		<table class="table table-hover">
			<tr><th><input type="hidden" name="t0" value='<?php echo $_SESSION["mail"];?>'></th></tr>
			<tr><th>Enter Mail</th><th><input type="text" name="t1"></th></tr>
            <tr><th>Patients Name</th><th><input type="text" name="t2" /></th></tr>
            <tr><th>Phone Number</th><th><input type="tel" name="t3" /></th></tr>
            <tr><th>Sex</th>
            <th><input type="radio" name="t4" value="male" > Male</th>
            <th><input type="radio" name="t4" value="female" > Female</th></tr>
            <tr><th>Specialization</th>
            <th><select name="t5" required="" >
            <option value="">Select</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Heart Surgery">Heart Surgery</option>
            <option value="Skin Care">Skin Care</option>
            <option value="Body Check-up">Body Check-up</option>
            <option value="Numerology">Numerology</option>
            <option value="Diagnosis">Diagnosis</option>
            <option value="Others">Others</option>									
            </select></th></tr>
            <tr><th>Choose Hospital</th>
            <th><select name="t6" required="" >
            <option value="">Select</option>
            <option value="Hospital 1">Hospital 1</option>
            <option value="Hospital 2">Hospital 2</option>
            <option value="Hospital 3">Hospital 3</option>
            <option value="Hospital 4">Hospital 4</option>
            <option value="Hospital 5">Hospital 5</option>
            </select></th></tr>
            <tr><th>Date</th>
            <th><input type="date" name="t7" ></th></tr>
            <tr><th>Taking any medications currently?</th>
            <th><input type="radio" name="t8" value="Yes" > Yes</th>
            <th><input type="radio" name="t8" value="No"> No</th></tr>       
           <tr><th>Enter Key</th><th><input type="text"  name="t9"  ></tr>
		</table>
		<input type="button" name="" value="encrypt" class="btn btn-primary" onclick="do_encrypt();">
            <input type="submit" value="send" class="btn btn-warning" onclick="do_encrypt();">
				<br><br>
	</form>
	</div>
</div>
<div class="footer_wthree_agile">
		<p>All Copy Rights by Naveen Kumar</p>

	</div>

	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>

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
	<link href="/mail2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/mail2/css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="/mail2/css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
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
							<h1><span class="" aria-hidden="true"></span>CURATIVE <label>For A Better Treatment</label></h1>
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
		<p><h1 style="text-align: center;color: white;">Welcome To <?php echo $_SESSION['name'];?></h1></p>
	</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44380730-1', 'mhe.github.io');
  ga('send', 'pageview');

</script>
<?php

$a="KMM";
// Generate Guid 
function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText =$GLOBALS['a'].''.
        substr($s,0,5);
    return $guidText;
}
?>
</head>
<body>
	<div class=" container">
		<div class="row">
	   <div class="row">
    	<div class="span4">
    		<label for="inputNumbits">Number of bits</label>
    		<input value="1024" type="text" id="inputNumbits" placeholder="Integer">
    		<button id="btn_genkeypair" class="btn btn-primary">Generate keypair</button>
    		
    	</div>
    <form action="reg.php" method="post">
    	<div class="">
  
    	<div class="span7 offset1 result">
    		<p>public key:<textarea cols="70" rows="8" id="pubn" class="ciphertext" name="t1"></textarea> </p>
    		<p>private key:<textarea cols="70" rows="8" id="privl" class="ciphertext" name="t2"></textarea></p>
    		<p><input readonly style="color:black;" type="hidden" value="<?php $Guid = NewGuid(); echo $Guid;?>" style="color:white;" 
				name="t3" required=""></p>
    	</div>
    		<input type="submit" class="btn btn-primary" name="">
      </form>
    </div>
</div>
</div>
</body>
</html>
<script type="text/javascript" src="js/jsbn/jsbn.js"></script>
<script type="text/javascript" src="js/jsbn/jsbn2.js"></script>
<script type="text/javascript" src="js/jsbn/prng4.js"></script>
<script type="text/javascript" src="js/jsbn/rng.js"></script>
<script type="text/javascript" src="paillier.js"></script>
<script type="text/javascript">
var keys, encA, encB, encAB, encABC;
$(document ).ready(function(){
	$('#btn_genkeypair').click(function(event) {
		var numBits = parseInt($('#inputNumbits').val());
		if (numBits % 2 === 0) {
			var startTime = new Date().getTime(),
				elapsed;
			keys = paillier.generateKeys(numBits);
			elapsed = new Date().getTime() - startTime;
			$('#keygentime').html(elapsed);
			$('#pubn').html(keys.pub.n.toString());
			$('#privl').html(keys.sec.lambda.toString());			
		} else {
			alert("Please enter an even number of bits :)");
		}
	});
	$('#btn_precompute').click(function(event) {
		var numPrecomputations = parseInt($('#inputNumPrecompute').val()),
			startTime, elapsed;
		startTime = new Date().getTime();
		keys.pub.precompute(numPrecomputations);
		elapsed = new Date().getTime() - startTime;
		$('#precomputetime').html(elapsed);
	});
	$('#btn_encrypt').click(function(event) {
		var valA = parseInt($('#inputA').val()),
			valB = parseInt($('#inputB').val()),
			startTime,
			elapsed;

		startTime = new Date().getTime();
		encA = keys.pub.encrypt(nbv(valA));
		elapsed = new Date().getTime() - startTime;
		$('#encA').html(encA.toString());
		$('#encAtime').html(elapsed);

		startTime = new Date().getTime();
		encB = keys.pub.encrypt(nbv(valB));
		elapsed = new Date().getTime() - startTime;
		$('#encBtime').html(elapsed);
		$('#encB').html(encB.toString());
	});
	$('#btn_add').click(function(event) {
		var startTime,
			elapsed;
		startTime = new Date().getTime();
		encAB = keys.pub.add(encA,encB);
		elapsed = new Date().getTime() - startTime;
		$('#addtime').html(elapsed);
		$('#encAB').html(encAB.toString());
	});
	$('#btn_randadd').click(function() {
		var startTime,
			elapsed;
		startTime = new Date().getTime();
		encAB = keys.pub.randomize(encAB);
		elapsed = new Date().getTime() - startTime;
		$('#randaddtime').html(elapsed);
		$('#encAB').html(encAB.toString());
	});
	$('#btn_mult').click(function(event) {
		var valC = parseInt($('#inputC').val()),
			startTime,
			elapsed;
		startTime = new Date().getTime();
		encABC = keys.pub.mult(encAB,nbv(valC));
		elapsed = new Date().getTime() - startTime;
		$('#multtime').html(elapsed);
		$('#encABC').html(encABC.toString());
	});
	$('#btn_randmult').click(function() {
		var startTime,
			elapsed;
		startTime = new Date().getTime();		
		encABC = keys.pub.randomize(encABC);
		elapsed = new Date().getTime() - startTime;
		$('#randmulttime').html(elapsed);		
		$('#encABC').html(encABC.toString());
	});	
	$('#btn_decrypt').click(function() {
		var plaintext,
			startTime,
			elapsed;
		startTime = new Date().getTime();
		plaintext = keys.sec.decrypt(encA).toString(10)
		elapsed = new Date().getTime() - startTime;
		$('#plainABC').html(plaintext);
		$('#decrypttime').html(elapsed);
	});
});
</script>

<div class="footer_wthree_agile">
		<p>All Copy Rights by Naveen Kumar</p>

	</div>

	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="/mail/js/jquery-2.1.4.min.js"></script>
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

	<script type="text/javascript" src="/mail2/js/bootstrap.js"></script>
</body>

</html>

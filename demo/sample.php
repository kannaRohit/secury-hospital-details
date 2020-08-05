<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- w3school -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
		div.result {
			background-color: #cccccc;
			word-wrap: break-word;
		}
		.cyphertext {
			 word-wrap: break-word;
		}
	</style>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44380730-1', 'mhe.github.io');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics -->
	
</head>
<body>
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


				<label class="head">UNIQUE ID<span class="w3l-star"> </span></label>
				<input readonly style="color:black;" type="text" value="<?php $Guid = NewGuid(); echo $Guid;?>" style="color:white;" 
						name="a" required="">
    <div class="row">
    	<div class="span4">
    		<label for="inputNumbits">Number of bits</label>
    		<input value="1024" type="text" id="inputNumbits" placeholder="Integer">
    		<button id="btn_genkeypair" class="btn btn-primary">Generate keypair</button>
    		
    	</div>
    	<div class="span7 offset1 result">
    		<p>public n: <span id="pubn" class="ciphertext">-</span></p>
    		<p>private lambda: <span id="privl" class="ciphertext">-</span></p>
    		<p>Elapsed time (keygen): <span id="keygentime">-</span> ms</p>
    		<p>Elapsed time (precomputation): <span id="precomputetime">-</span> ms</p>
    	</div>
    </div>
       <div class="row">
    	<div class="span4">
    		<label class="control-label" for="inputA">Test input A</label>
    		<input value="" type="text" id="inputA" placeholder="Integer">
    		<label class="control-label" for="inputB">Test input B</label>
    		<input value="" type="text" id="inputB" placeholder="Integer">
    		<button id="btn_encrypt" type="submit" class="btn btn-primary">Encrypt</button>
        </div>
    	<div class="span7 offset1 result">
    		<p>[A] = <span class="ciphertext" id="encA">-</span></p>
    		<p>Elapsed time: <span id="encAtime">-</span> ms</p>    		
    		<p>[B] = <span class="ciphertext" id="encB">-</span></p>
    		<p>Elapsed time: <span id="encBtime">-</span> ms</p>
    	</div>
    </div>
      <h3>Decryption</h3>
    <div class="row">
    	<div class="span4">
    		<button id="btn_decrypt" type="submit" class="btn btn-primary">Decrypt</button>
        </div>
    	<div class="span7 offset1 result">
    		<p>(A + B)*C = <span class="plaintext" id="plainABC">-</span></p>
    		<p>Elapsed time: <span id="decrypttime">-</span> ms</p>    		
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
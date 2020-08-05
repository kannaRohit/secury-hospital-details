


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>JavaScript RSA Cryptography Demo</title>
  </head>

<script language="JavaScript" type="text/javascript" src="jsbn.js"></script>
<script language="JavaScript" type="text/javascript" src="jsbn2.js"></script>
<script language="JavaScript" type="text/javascript" src="prng4.js"></script>
<script language="JavaScript" type="text/javascript" src="rng.js"></script>
<script language="JavaScript" type="text/javascript" src="rsa.js"></script>
<script language="JavaScript" type="text/javascript" src="rsa2.js"></script>
<script language="JavaScript">
  var n="a5261939975948bb7a58dffe5ff54e65f0498f9175f5a09288810b8975871e99\naf3b5dd94057b0fc07535f5f97444504fa35169d461d0d30cf0192e307727c06\n5168c788771c561a9400fb49175e9e6aa4e23fe11af69e9412dd23b0cb6684c4\nc2429bce139e848ab26d0829073351f4acd36074eafd036a5eb83359d2a698d3";
  var e="10001";
  var d="8e9912f6d3645894e8d38cb58c0db81ff516cf4c7e5a14c7f1eddb1459d2cded\n4d8d293fc97aee6aefb861859c8b6a3d1dfe710463e1f9ddc72048c09751971c\n4a580aa51eb523357a3cc48d31cfad1d4a165066ed92d4748fb6571211da5cb1\n4bc11b6e2df7c1a559e6d5ac1cd5c94703a22891464fba23d0d965086277a161";
  var p="d090ce58a92c75233a6486cb0a9209bf3583b64f540c76f5294bb97d285eed33\naec220bde14b2417951178ac152ceab6da7090905b478195498b352048f15e7d";
  var q="cab575dc652bb66df15a0359609d51d1db184750c00c6698b90ef3465c996551\n03edbf0d54c56aec0ce3c4d22592338092a126a0cc49f65a4a30d222b411e58f";
  var dmp1="1a24bca8e273df2f0e47c199bbf678604e7df7215480c77c8db39f49b000ce2c\nf7500038acfff5433b7d582a01f1826e6f4d42e1c57f5e1fef7b12aabc59fd25";
  var dmq1="3d06982efbbe47339e1f6d36b1216b8a741d410b0c662f54f7118b27b9a4ec9d\n914337eb39841d8666f3034408cf94f5b62f11c402fc994fe15a05493150d9fd";
  var coeff="3a3e731acd8960b7ff9eb81a7ff93bd1cfa74cbd56987db58b4594fb09c09084\ndb1734c8143f98b602b981aaa9243ca28deb69b5b280ee8dcee0fd2625e53250";


function do_decrypt() {
  var before = new Date();
  var rsa = new RSAKey();
  var dr = document.rsatest;
  rsa.setPrivateEx(n,e,d,p,q,dmp1,dmq1,coeff);
  if(document.rsatest.ciphertext.value.length == 0) {
    
    return;
  }
  var res = rsa.decrypt(document.rsatest.ciphertext.value);
  var after = new Date();
  if(res == null) {
    document.rsatest.decrypted.value = "*** Invalid Ciphertext ***";
   
  }
  else {
    document.rsatest.decrypted.value = res;
    
  }
}
</script>

  <body>



<form name="rsatest">
<textarea name="ciphertext" rows=4 cols=70></textarea><br>
<input type="button" value="decrypt" onClick="do_decrypt();"><p>
Decrypted Plaintext (string):<br>
<input name="decrypted" type="text" size=60><p>


</form>
  </body>
</html>

</p>
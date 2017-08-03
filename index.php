<?php

?>
<!DOCTYPE>
<html>
<head>
<title>Password Encryption</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.2/angular.min.js"></script>
<link href="custom-style.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
function onLoad(){
	document.getElementById('password').focus();
}
</script>

</head>
<body onload="onLoad()">

<form method="post" action="encrypt.php" target="results" id="password-form"> 
<input type="text" name="password" id="password" class="form-control" placeholder="Enter Password"/>
<input type="submit" name="submit" id="submit" class="form-control" value="Encrypt"/> 
</form>



<div id="encryptedpassword">
<!-- <p>MD5: {{encryptPass}} </p> -->
<!-- <p>SHA1: <?php //echo sha1('{{encryptPass}}'); ?></p> -->
<iframe src="encrypt.php" name="results" width="100%" height="100%" id="resultframe"/> 
</div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php

?>
<!DOCTYPE>
<html>
<head>
<title>Password Encryption</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
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
<iframe src="encrypt.php" name="results" width="100%" height="100%" id="resultframe"/>
</div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>


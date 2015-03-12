<?php

if(isset($_POST['password'])) $password = $_POST['password'];
if(isset($password)) $md5password = md5($password);
if(isset($password)) $sha1password = sha1($password);

?>
<!DOCTYPE>
<html>
<head>
<title>Password Encryption</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href="custom-style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div id="content">

<p><strong>MD5:</strong> 
<?php echo isset($password) ? $md5password : 'nothing to do'; ?>
</p>
<p><strong>Sha1:</strong> 
<?php echo isset($password) ? $sha1password : 'nothing to do'; ?>
</p>

</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
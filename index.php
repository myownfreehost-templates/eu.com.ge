<?
include('geturl.php');
?>
<html>
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAHtRtAAAAAAAH4AAAD/AAABw4AAA4HAAAOBwAADgcAAA4HAAAOBwAADgcAAA4HAAAOBwAABw4AAAP8AAAB+AAAAAAAAD//wAA+B8AAPAPAADjxwAAx+MAAMfjAADH4wAAx+MAAMfjAADH4wAAx+MAAMfjAADjxwAA8A8AAPgfAAD//wAA" rel="icon" type="image/x-icon">
<Title>Free Web Hosting with Free Subdomain Name</Title>
  <meta charset="UTF-8">
  <meta name="description" content="<?echo $yourdomain;?> - Free Web Hosting with Free Subdomain Name.">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Hosting, Subdomain">
  <meta name="author" content="Mehrab Mazmanian">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="bootstrap.min.css">
 <script type="text/javascript">
var searchWinHref = window.location.href;
   if(searchWinHref.indexOf("?i") > -1) { 
   window.location.href = window.location.href.split('?')[0];
   }
</script> 
</head>
<body>
<center>
.<?echo $yourdomain;?> Free subdomain name and Free web hosting with 5 GB storage and php support<hr>
<table style="text-align: left; margin: 10px; padding 10px;"><tr><td style="margin: 10px; padding 10px; position: relative; display: inline-block;">
<form action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post">
<input placeholder="Enter username" type="text" name="uname" maxlength="30" oninvalid="this.setCustomValidity('Enter username')" oninput="setCustomValidity('')" required><br>
<input placeholder="Enter password" type="password" name="passwd" maxlength="30" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" required><br>
<input type="submit" name="submit" value="Login" /><br>
<a href="http://cpanel.<?echo $yourdomain;?>/lostpassword.php">Forgot password?</a>
</form>
</td><td style="margin: 10px; padding 10px; display: inline-block;">
<?php include 'signup.php'; ?>
</td></tr></table>
<center>
<div style="padding: 5px; margin: 5px; text-align: left; position: fixed; left: 0; bottom: 0; color: black;">&copy; 20<?php echo date('y'); ?> <a href="https://ifastnet.com/portal/aff.php?aff=30660">Premium</a></div><div style="padding: 5px; margin: 5px; text-align: right; position: fixed; right: 0; bottom: 0;"><?php include 'stat.php'; ?></div>
</body>
</html>

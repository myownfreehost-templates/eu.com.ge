<?php
$id = md5(rand(6000,PHP_INT_MAX));
?>
<?
include('geturl.php');
?>
<? $subdomain = $_GET['subdomain']; ?>
<form method=post action="http://order.<?echo $yourdomain;?>/register2.php">
<input placeholder="Enter subdomain" type=text name=username value="<?echo $subdomain;?>" pattern="[a-z0-9]{4,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter sub-domain name')" oninput="setCustomValidity('')" required>.<?echo $yourdomain;?><br>
<input placeholder="Enter password" type=password name=password pattern=".{6,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" required><br>
<input placeholder="Enter email address" oninvalid="this.setCustomValidity('Enter e-mail')" oninput="setCustomValidity('')" type="email" name=email value="" required><br>
<input type=hidden name=id value="<?PHP echo $id; ?>">
<img alt="captcha" src="http://order.<? echo $yourdomain;?>/image.php?id=<?PHP echo $id; ?>"><br>
<input placeholder="Captcha" size="10" type=text pattern=".{5,5}" name=number oninvalid="this.setCustomValidity('Enter security code')" oninput="setCustomValidity('')" required><br>
<input type="submit" value="Sign Up">
</form>

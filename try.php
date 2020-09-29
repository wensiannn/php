<form name="frmUser" method="post" action="">
<?php if($message!="") { ?>
<div class="message"><?php echo $message; ?></div>
<?php } ?>
<table border="0" cellpadding="10" cellspacing="1" width="100%" class="tblLogin">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="user_name"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>

<?php
if(count($_POST)>0) {
	if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin") {
		$_SESSION["user_id"] = 1001;
		$_SESSION["user_name"] = $_POST["user_name"];
		$_SESSION['loggedin_time'] = time();  
                echo("<meta http-equiv = 'refresh' content = '3; url = dashboard.php' />");
               echo("Welcome,this page will be redirecting in 3 seconds");
	} else {
		$message = "Invalid Username or Password!";
	}
}



?>
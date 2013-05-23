<html>
<head>
<title>
Install contact form
</title>

</head>
<body>

<form action="install-script.php" method="post">
  <fieldset>
     <label for="new_admin_username">Username of administrator account:</label>
       <input type="text" name="new_admin_username" size="40" class="required"/>
<br>
     <label for="new_admin_password">Password:</label>
       <input type="text" name="new_admin_password" size="40" class="required"/>
<br><!--
     <label for="new_admin_confirm_password">Confirm password:</label>
       <input type="password" name="new_admin_confirm_password" size="40" class="required"/>
<br> -->
  </fieldset>
  <fieldset align="center">
    <input type="submit" value="Install"/>
  </fieldset>
</form>

</body>
</html>
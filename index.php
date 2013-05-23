<html>
<head>
<title>
PHP Form
</title>

</head>
<body>

<form action="submit.php" method="post">
  <fieldset>
     <label for="name">Your name:</label>
       <input type="text" name="name" size="35"/>
<br>
     <label for="email">Your email address:</label>
       <input type="text" name="email" size="25"/>
<br>
     <label for="message">Your message:</label><br>
       <textarea name="message" cols="70" rows="10"></textarea>
  </fieldset>
<br>
  <fieldset align="center">
    <input type="submit" value="Submit"/>
  </fieldset>
</form>

</body>
</html>
<!-- Form -->

<html>
<head>
    <title>Cookie store</title>
</head>
<body>
<form method="POST" action="php-basic_9-3_cookie2.php">
    <label for="email">Email Address</label> 
    <input id="email" type="text" name="email" value="<?= $_COOKIE['email'] ?>" />
    <input type="submit" value="Send">
</form>
</body>
</html>


<!-- View -->
<?php setcookie('email', $_POST['email'], time() + (60 * 60 * 24 * 90)); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie info</title>
</head>
<body>
<p>Cookie stored...</p>
</body>
</html>
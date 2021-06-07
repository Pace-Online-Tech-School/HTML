<!-- Form -->

<html>
<head>
    <title>Session store</title>
</head>
<body>
<form method="POST" action="/php-basic_9-3_cookie2.php">
    <label for="email">Email Address</label> 
    <input id="email" type="text" name="email" value="<?= $_SESSION['email'] ?>" />
    <input type="submit" value="Send">
</form>
</body>
</html>


<!-- View -->
<?php session_start();
$_SESSION['email'] = $_POST['email']; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Session info</title>
</head>
<body>
<p>Session info was stored...</p>
</body>
</html>
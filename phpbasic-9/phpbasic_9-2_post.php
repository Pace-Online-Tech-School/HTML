<!-- Form -->

<html>
<head>
    <title></title>
</head>
<body>
<!-- Declare GET method. Set a file as destination -->
<form method="GET" action="php-basic_9-2_get2.php" >
<label for="name">Name:</label>
<input id="name" type="text" name="name" />
<input type="submit" value="Send" />
</form>
</body>
</html>

<!-- View -->
<head>
    <title>Samplle | GET method result</title>
</head>
<body>
<p>Hi, <?= $_GET['name']?>.</p>
</body>
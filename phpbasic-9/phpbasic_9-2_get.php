<!-- Form -->
<head>
    <title>Sample | POST method form</title>
</head>
<body>
    <!-- Declare POST method. Set -->
    <form method="POST" action="php-basic_9-2_post2.php">
    <label for ="name">Name:</label>
    <input id="name" type="text" name="name"/>
    <input type="submit" value="Send" />
    </form>
    </body>


<!-- View -->
<html>
<head>
    <title>Sample | POST method result</title>
</head>
<body>
<p>Hi, <?= $_POST['name'] ?>.</p>
</form>
</body>
</html>
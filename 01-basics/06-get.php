<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
	
	<!-- Formulier -->
	<form action="" method="get">
        <label for"username">Username:</label>
        <input type="text" id="username" name="username" value>

        <label for"password">password:</label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Login">

     <?php
	 //=========== GET superglobal


        echo "<pre>";
        print_r($_GET);
		
        echo $_GET['username'];
        echo $_GET['password'];

     ?>
    
    <a href="05TASK-if-else-and-operators.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="06-post.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>
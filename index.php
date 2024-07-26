<? session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
<div class="container"> 
	<p><?=$_SESSION['status']?></p>
	<? unset($_SESSION['status'])?>

	<form action="php/authorization.php" method="POST">
		<input type="text" placeholder="ЛОГИН" name="login" required>
		<input type="password" placeholder="ПАРОЛЬ" name="password" required>
		<input type="submit" value="ВОЙТИ" name="send">
	</form>
	<a href="regPage.php">Зарегистрироваться</a>
</div>
</body>
</html>
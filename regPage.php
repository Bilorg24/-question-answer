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
	<form action="php/registration.php" method="POST">
		<input type="text" name="fio" placeholder="ФИО" required pattern="[А-Яа-яЁёA-Za-z]+ [А-Яа-яЁёA-Za-z]+ [А-Яа-яЁёA-Za-z]+" title="Допустимы только кириллические и латинские буквы, а также пробелы" > 
		<input type="text" placeholder="ЛОГИН" name="login" required>
		<input type="password" placeholder="ПАРОЛЬ" name="password" required pattern="(?=.*\d).{3,}" title="пароль должен иметь длину не менее трех символов и включать в себя хотя бы одну цифру">
		<input type="text" placeholder="ТЕЛЕФОН" name="tel" pattern="8\(\d{3}\)-\d{3}-\d{2}-\d{2}" title="Формат: 8(XXX)-XXX-XX-XX" required>
		<input type="email" placeholder="EMAIL" name="email" required>
		<input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ" name="send">
	</form>
	</div>
</body>
</html>
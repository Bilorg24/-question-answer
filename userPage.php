<? session_start() ?>
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

<? if ($_SESSION['userRole']==1): ?>

	<h1>ВЫ ВОШЛИ КАК <?=$_SESSION['userLogin']?></h1>
	<p><?=$_SESSION['status']?></p>
	<? unset($_SESSION['status'])?>

	<form action="php/sendMessage.php" method="POST">
		<input type="text" name="number" placeholder="Введите номер авто" required>	
		<textarea name="message" placeholder="Введите описание нарушения" required></textarea>
		<input type="datetime-local" name="time" min="<?=date("Y-m-d")?>T08:00" max="<?=date("Y-m-d")?>T18:00" step="3600" required>
		<input type="submit" value="ОТПРАВИТЬ" name="sendMessage">
	</form>

	<? include 'includes/userMessages.php'; ?>
	
	<a href="php/logout.php">ВЫЙТИ</a>

<? else: ?>

	<h2>Эта страница только для пользователей!</h2>
	<a href="index.php">ВЕРНУТЬСЯ</a>

<? endif; ?>
</div>
</body>
</html>


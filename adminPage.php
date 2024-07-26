<? session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
<div class="container"> 
<? if ($_SESSION['userRole']==0): ?>

	<h1>ВЫ ВОШЛИ КАК <?=$_SESSION['userLogin']?></h1>

	<? include 'includes/adminMessages.php'; ?>
	
	<a href="php/logout.php">ВЫЙТИ</a>

<? else: ?>

	<h2>Эта страница только для администраторов!</h2>
	<a href="index.php">ВЕРНУТЬСЯ</a>

<? endif; ?>
</div>
</body>
</html>
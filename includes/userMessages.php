<?
session_start();
require_once 'db/connection.php';
$userId = $_SESSION['userId'];

$query = "select * from messages where user_id=$userId";

$userMessages = $conn->query($query);

foreach ($userMessages as $message): ?>
	<div class="message">
		<p>
			Номер сообщения: <?=$message['id']?> Номер автомобиля: <?=$message['number']?>
		</p>
		<p> 
			Описание: <?=$message['message']?> 
		</p>
		<p>
			Время: <?=$message['request']?>
		</p>
		<p> 
			Статус: <?=$message['status']?>		
		</p>

		<? if ($message['status']=='Новая' && $_SESSION['userRole']==1): ?>
			<form action="php/delMessage.php" method="POST">
				<input type="hidden" name="messId" value="<?=$message['id']?>">
				<input type="submit" value="Удалить">
			</form>
		<? endif; ?>
	</div>

<? endforeach; ?>

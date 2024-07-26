<?
session_start();
require_once 'db/connection.php';
$query = "select * from messages";
$userMessages = $conn->query($query);
foreach ($userMessages as $message): ?>
	<div class="message">
		<p>
			Пользователь: <?=$message['user_id']?>
		</p>
		<p>
			Номер сообщения: <?=$message['id']?>
		</p> 
		<p>
			Номер автомобиля: <?=$message['nubmer']?>
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
			<? if ($message['status']=='Новая' && $_SESSION['userRole']==0): ?>
			<form action="php/changeStatus.php" method="POST">
				<input type="hidden" name="messId" value="<?=$message['id']?>">
				<select name="mesStatus" id="mesStatus">
					<option value="Подтверждено">Подтверждено</option>
					<option value="Отклонено">Отклонено</option>
				</select>
				<input type="submit" value="Изменить статус">
			</form>
		<? endif; ?>
	</div>
<? endforeach; ?>

<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
	<title>Пользователи</title>
</head>
<body>

<section class="wrapper">
	<?php include 'php/Select.php'; ?>
</section>
<section class="wrapperMenu">
<div class="addMenu">
<form method="POST" action="php/insert.php">
<h3>Добавить Пользователя</h3>
<p>Фамилия: 
<input type="text" name="family" /></p>
<p>Имя:     
<input type="text" name="name" /></p>
<p>Отчество: 
<input type="text" name="secondName" /></p>
<p>Пароль: 
<input type="text" name="password" /></p>
<input type="submit" value="Добавить">
</form>
</div>
</section>

</body>
<script src="js/script.js"></script>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/create_profile.css">
	<title>Создайте профиль</title>
</head>
<body>
	<div class="container">
		<form action="../php/form.php" method="POST">
			<h1>Привет!<br>создай профиль</h1>
			<input type="text" name="login" placeholder="Придумай логин">
			<input type="text" name="password" placeholder="Придумай пароль">
			<input type="submit" value="Создать профиль">
		</form>
	</div>
</body>
</html>
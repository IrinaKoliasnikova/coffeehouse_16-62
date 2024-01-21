<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/entry.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lora:wght@600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.svg" type="image/svg">
	<title>Вход | Кофейня 16/62</title>
</head>

<body>
	<header style="background: url(img/bg-h.jpg) no-repeat center top / cover">
		<div class="nav">
			<div class="container">

				<ul class="menu">
					<li>
						<a class="nav-link" href="main.php">Главная</a>
					</li>
					<li>
						<a class="nav-link" href="menu.php">Меню</a>
					</li>

					<a href="main.php">
						<img class="img-fluid" src="img/logo.svg">
					</a>

					<li>
						<a class="nav-link" href="contact.php">Контакты</a>
					</li>
					<li>
						<a class="nav-link" href="entry.php">Вход</a>
					</li>
				</ul>

				<button class="menu-open">
					<img src="img/gamb.svg">
				</button>

			</div>
		</div>

		<h2>Вход</h2>

	</header>

	<section>
		<article class="admin">
			<div class="container">
				
				<div class="login">
					<input type="text" placeholder="Логин" name="login" form="form">
				</div>

				<div class="password">
					<input type="password" placeholder="Пароль" name="password" form="form">
				</div>

				<div class="entry">
					<input type="submit" value="Войти" class="entry" name="entry" form="form">
				</div>

				<form action="admin/admin.php" method="post" id="form"></form>
			</div>
		</article>
	</section>

	<footer>
		<p>©2024 All Rights Reserved</p>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
<?php 

session_start();

if (!empty($_SESSION["login"])) :
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/panel.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lora:wght@600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.svg" type="image/svg">
	<title>Административная панель</title>
</head>
<body>
	<div class="nav">
		<div class="container">

			<ul class="menu">
				<li>
					<a class="nav-link" href="admin/main.php">Главная</a>
				</li>
				<li>
					<a class="nav-link" href="admin/menu.php">Меню</a>
				</li>

				<a href="main.php">
					<img class="img-fluid" src="img/logo.svg">
				</a>

				<li>
					<a class="nav-link" href="admin/contact.php">Контакты</a>
				</li>
				<li>
					<a class="nav-link" href="logout.php">Выйти</a>
				</li>
			</ul>
			<?php 
				else:
					echo '<h2 style="text-align: center; margin-top: 30px">Не нарушайте 270 ст.</h2>';
					echo '<a href="main.php"><p style="text-align: center">На главную</p></a>';
			?>	
			<?php	endif		?>	
		</div>
	</div>
</body>
</html>
<?php session_start()?>
<?php require_once '../functions/connect.php';?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lora:wght@600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.svg" type="image/svg">
	<title></title>
</head>
<body>
	<header style="background: url(../img/bg-h.jpg) no-repeat center top / cover">
		<div class="nav">
			<div class="container">

			<?php if (!empty($_SESSION["login"])) :?>

			<ul class="menu">

				<a href="main.php">
					<img class="img-fluid" src="../img/logo.svg">
				</a>

				<li>
					<a class="nav-link" href="../logout.php">Выйти</a>
				<?php 
					$sql = $pdo->prepare("SELECT * FROM contacts");
					$sql->execute();
					$result=$sql->fetch(PDO::FETCH_OBJ);
				?>
				</li>

				<button class="menu-open">
					<img src="../img/gamb.svg">
				</button>
			</ul>
			</div>
		</div>

		<h2>Контакты</h2> 

	</header>

	<section>
		<div class="container">
			<form action="link/contact.php" method="post" enctype="multipart/form-data">
			<article class="contact">
				<div class="p-2">
					<h2>Контакты</h2>

					<p class="time"><b>Время работы:</b></p>

					<p>
						<textarea name="time_of_work" id="time_of_work" cols="30" rows="4" style="background: none; resize: none;"><?php echo $result->time_of_work ?></textarea>
						
					</p>

					<p class="adress"><b>Адреса:</b></p>

					<p>
						<textarea name="adress" id="adress" cols="30" rows="3" style="background: none; resize: none;"><?php echo $result->adress ?></textarea>
					</p>

					<p class="soc"><b>Наши соц. сети:</b></p>

					<div>
						<a href="https://vk.com/coffee1662"><img class="vk" src="../img/<?php echo $result->vk ?>"></a>
						<a href="https://www.instagram.com/coffee16_62/"><img class="insta" src="../img/<?php echo $result->instagram ?>"></a>

						<input type="file" name="vk" style="margin-top: 10px;">
						<input type="file" name="insta" style="margin-top: 10px;">
					</div>
				</div>
				
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A45fb85c92d7cc8b39225d782ccbd4a333c003a33445d11a1dd639d7f530d80e8&amp;source=constructor" width="610" height="560" frameborder="0"></iframe>
			</article>

			<input style="text-align: center; width: 340px; height: 50px; margin-left: 500px; margin-top: 50px;" name="save" type="submit" value="Сохранить">
			</form>
		</div>
	</section>

	<footer>
		<p>©2023 All Rights Reserved</p>
	</footer>

	<?php 
		else:
			echo '<h2 style="text-align: center; margin-top: 30px">Не нарушайте 272 ст. УК РФ</h2>';
			echo '<a href="../main.php"><p style="text-align: center">На главную</p></a>';

		endif 
	?>	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
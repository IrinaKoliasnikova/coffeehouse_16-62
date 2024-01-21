<?php require_once './functions/connect.php';?>
<?php

$menu = $pdo->prepare("SELECT * FROM menu");
$menu->execute();
$resul=$menu->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lora:wght@600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.svg" type="image/svg">
	<title>Меню | Кофейня 16/62</title>
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

		<h2>Меню</h2> 

	</header>

		<section>
		<div class="container">
			<article class="dish">
				<div class="coll-1">
				<div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
				  <div class="coffee accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
				        <?php echo $resul["titlef"] ?>
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
				      <div class="accordion-body">
				        <div class="coffee-1">
							<div class="ing" style="height: auto;">
								<p class="n"><?php echo $resul["dishf"] ?></p>
								<p class="v"><?php echo $resul["volumef"] ?></p>
								<p class="c"><?php echo $resul["costf"] ?></p>
							</div>
				      </div>
				    </div>
				  </div>
				</div>
				  <div class="cold accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
				        <?php echo $resul["titles"] ?>
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
				      <div class="accordion-body">
				        <div class="ing" style="height: auto;">
							<p class="n"><?php echo $resul["dishs"] ?></p>
							<p class="v"><?php echo $resul["volumes"] ?></p>
							<p class="c"><?php echo $resul["costs"] ?></p>
						</div>

				      </div>
				    </div>
				  </div>
				  <div class="non accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
				        <?php echo $resul["titleth"] ?>
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
				      <div class="accordion-body">
				        <div class="ing" style="height: auto;">
							<p class="n"><?php echo $resul["dishth"] ?></p>
							<p class="v"><?php echo $resul["volumeth"] ?></p>
							<p class="c"><?php echo $resul["costth"] ?></p>
						</div>
				      </div>
				    </div>
				  </div>

				  <div class="smoothy accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
				        <?php echo $resul["titlefo"] ?>
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show">
				      <div class="accordion-body">
				        	<div class="ing" style="height: auto;">
								<p class="n"><?php echo $resul["dishfo"] ?></p>
								<p class="v"><?php echo $resul["volumefo"] ?></p>
								<p class="c"><?php echo $resul["costfo"] ?></p>
							</div>
				      </div>
				    </div>
				  </div>

				</div>
				</div>

				<div class="coll-2">
				<div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
				  <div class="tea accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
				        <?php echo $resul["titlefi"] ?>
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
				      <div class="accordion-body">
				        <div class="ing" style="height: auto;">
							<p class="n"><?php echo $resul["dishfi"] ?></p>
							<p class="v"><?php echo $resul["volumefi"] ?></p>
							<p class="c"><?php echo $resul["costfi"] ?></p>
						</div>
						</div>	
				      </div>
				    </div>
				  </div>
				  <div class="deserts accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed desert" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix" >
				        <?php echo $resul["titlesix"] ?>
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
				      <div class="accordion-body desert">
				        <div class="ing" style="height: auto;">
							<p class="n"><?php echo $resul["dishsix"] ?></p>
							<p class="cost"><?php echo $resul["costsix"] ?></p>
						</div>
				      </div>
				    </div>
				  </div>
				  <div class="adds accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed add" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				        <?php echo $resul["titlese"] ?>
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
				      <div class="accordion-body add">
				       	<div class="ing" style="height: auto;">
							<p class="n"><?php echo $resul["dishse"] ?></p>
							<p class="cost"><?php echo $resul["costse"] ?></p>
						</div>
				      </div>
				    </div>
				  </div>

				</div>
				
			</article>
		</div>
	</section>

	<footer>
		<p>©2023 All Rights Reserved</p>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
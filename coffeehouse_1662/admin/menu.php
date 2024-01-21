<?php session_start()?>
<?php require_once '../functions/connect.php';?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
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
					$menu = $pdo->prepare("SELECT * FROM menu");
					$menu->execute();
					$resul=$menu->fetch(PDO::FETCH_OBJ);
				?>
				</li>

				<button class="menu-open">
					<img src="../img/gamb.svg">
				</button>
			</ul>
			</div>
		</div>

		<h2>Меню</h2> 

	</header>
	<section>
		<form action="link/menu.php" method="post">
		<div class="container">
			<article class="dish">
				<div class="coll-1">
				<div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
				  <div class="coffee accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
				        <input type="text" name="titlef" style="background: none" value="<?php echo $resul->titlef ?>">
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
				      <div class="accordion-body">
				        <div class="coffee-1">
							<div class="ing" style="height: auto;">
								<input type="text" name="dishf" style="background: none" class="n" value="<?php echo $resul->dishf ?>">				
								<input type="text" name="volumef" style="background: none" class="v" value="<?php echo $resul->volumef ?>">
								<input type="text" name="costf" style="width: 73px; background: none" class="c" value="<?php echo $resul->costf ?>">
							</div>
				      </div>
				    </div>
				  </div>
				</div>
				  <div class="cold accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
				        <input type="text" name="titles" style="background: none" value="<?php echo $resul->titles ?>">
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
				      <div class="accordion-body">
				        <div class="ing" style="height: auto;">
							<input type="text" name="dishs" style="background: none" class="n" value="<?php echo $resul->dishs ?>">				
							<input type="text" name="volumes" style="background: none" class="v" value="<?php echo $resul->volumes ?>">
							<input type="text" name="costs" style="width: 73px; background: none" class="c" value="<?php echo $resul->costs ?>">
						</div>

				      </div>
				    </div>
				  </div>
				  <div class="non accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
				        <input type="text" name="titleth" style="background: none" value="<?php echo $resul->titleth ?>">
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
				      <div class="accordion-body">
				        <div class="ing" style="height: auto;">
							<input type="text" name="dishth" style="background: none" class="n" value="<?php echo $resul->dishth ?>">				
							<input type="text" name="volumeth" style="background: none" class="v" value="<?php echo $resul->volumeth ?>">
							<input type="text" name="costth" style="width: 73px; background: none" class="c" value="<?php echo $resul->costth ?>">
						</div>
				      </div>
				    </div>
				  </div>

				  <div class="smoothy accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
				        <input type="text" name="titlefo" style="background: none" value="<?php echo $resul->titlefo ?>">
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show">
				      <div class="accordion-body">
				        	<div class="ing" style="height: auto;">
								<input type="text" name="dishfo" style="background: none" class="n" value="<?php echo $resul->dishfo ?>">				
								<input type="text" name="volumefo" style="background: none" class="v" value="<?php echo $resul->volumefo ?>">
								<input type="text" name="costfo" style="width: 73px; background: none" class="c" value="<?php echo $resul->costfo ?>">
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
				        <input type="text" name="titlefi" style="background: none" value="<?php echo $resul->titlefi ?>">
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
				      <div class="accordion-body">
				        <div class="ing" style="height: auto;">
							<input type="text" name="dishfi" style="background: none" class="n" value="<?php echo $resul->dishf ?>">				
							<input type="text" name="volumefi" style="background: none" class="v" value="<?php echo $resul->volumefi ?>">
							<input type="text" name="costfi" style="width: 77px; background: none" class="c" value="<?php echo $resul->costfi ?>">
						</div>
						</div>	
				      </div>
				    </div>
				  </div>
				  <div class="deserts accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed desert" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix" >
				        <input type="text" name="titlesix" style="background: none" value="<?php echo $resul->titlesix ?>">
				      </button>
				    </h2>
				    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
				      <div class="accordion-body desert">
				        <div class="ing" style="height: auto;">
							<input type="text" name="dishsix" style="background: none" class="n" value="<?php echo $resul->dishsix ?>">				
							<input type="text" name="costsx" style="width: 77px; background: none" class="cost" value="<?php echo $resul->costsix ?>">
						</div>
				      </div>
				    </div>
				  </div>
				  <div class="adds accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed add" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				        <input type="text" name="titlese" style="background: none" value="<?php echo $resul->titlese ?>">
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
				      <div class="accordion-body add">
				       	<div class="ing" style="height: auto;">
							<input type="text" name="dishse" style="background: none" class="n" value="<?php echo $resul->dishse ?>">				
							<input type="text" name="costse" style="width: 77px; background: none" class="cost" value="<?php echo $resul->costse ?>">
						</div>
				      </div>
				    </div>
				  </div>

				</div>
				
			</article>
			<input style="text-align: center; width: 340px; height: 50px; margin-left: 500px; margin-top: 50px;" name="save" type="submit" value="Сохранить">
			</form>
			
		</div>
		</form>
	</section>

	<footer>
		<p>©2023 All Rights Reserved</p>
	</footer>

	<?php 
		else:
			echo '<h2 style="text-align: center; margin-top: 30px">Не нарушайте 270 ст.</h2>';
			echo '<a href="../main.php"><p style="text-align: center">На главную</p></a>';
		endif 
	?>	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>
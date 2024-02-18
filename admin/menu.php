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
								<textarea name="dishf" id="dishf" class="n" rows="18" style="background: none; resize: none; width: 285px; padding: 0px;"><?php echo $resul->dishf ?></textarea>
								<textarea name="volumef" id="volumef" class="n" rows="18" style="background: none; resize: none; width: 130px; padding: 0px"><?php echo $resul->volumef ?></textarea>
								<textarea name="costf" id="costf" class="n" cols="8" rows="18" style="background: none; resize: none; width: 120px;"><?php echo $resul->costf ?></textarea>
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
							
								<textarea name="dishs" id="dishs" class="n" cols="30" rows="18" style="background: none; resize: none; width: 285px;"><?php echo $resul->dishs ?></textarea>
								<textarea name="volumes" id="volumes" class="n" cols="9" rows="18" style="background: none; resize: none; width: 130px;"><?php echo $resul->volumes ?></textarea>
								<textarea name="costs" id="costs" class="n" cols="8" rows="18" style="background: none; resize: none; width: 120px;"><?php echo $resul->costs ?></textarea>
							
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
							
								<textarea name="dishth" id="dishth" class="n" cols="30" rows="18" style="background: none; resize: none; width: 285px;"><?php echo $resul->dishth ?></textarea>
								<textarea name="volumeth" id="volumeth" class="n" cols="9" rows="18" style="background: none; resize: none; width: 130px;"><?php echo $resul->volumeth ?></textarea>
								<textarea name="costth" id="costth" class="n" cols="8" rows="18" style="background: none; resize: none; width: 120px;"><?php echo $resul->costth ?></textarea>
							
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
								
								<textarea name="dishfo" id="dishfo" class="n" cols="30" rows="18" style="background: none; resize: none; width: 285px;"><?php echo $resul->dishfo ?></textarea>
								<textarea name="volumefo" id="volumefo" class="n" cols="9" rows="18" style="background: none; resize: none; width: 130px;"><?php echo $resul->volumefo ?></textarea>
								<textarea name="costfo" id="costfo" class="n" cols="8" rows="18" style="background: none; resize: none; width: 120px;"><?php echo $resul->costfo ?></textarea>
							
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
							<textarea name="dishfi" id="dishfi" class="n" rows="18" style="background: none; resize: none; width: 300px;"><?php echo $resul->dishfi ?></textarea>
							<textarea name="volumefi" id="volumefi" class="n" rows="18" style="background: none; resize: none; width: 140px;"><?php echo $resul->volumefi ?></textarea>
							<textarea name="costfi" id="costfi" class="n" rows="18" style="background: none; resize: none; width: 140px;"><?php echo $resul->costfi ?></textarea>
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
							<textarea name="dishsix" id="dishsix" class="n" cols="30" rows="18" style="background: none; resize: none; width: 285px;"><?php echo $resul->dishsix ?></textarea>
							<textarea name="costsix" id="costsix" class="n" cols="8" rows="18" style="background: none; resize: none; width: 120px;"><?php echo $resul->costsix ?></textarea>
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
							<div class="ing" style="height: auto;">
								<textarea name="dishse" id="dishse" class="n" cols="30" rows="18" style="background: none; resize: none; width: 285px;"><?php echo $resul->dishse ?></textarea>
								<textarea name="costse" id="costse" class="n" cols="8" rows="18" style="background: none; resize: none; width: 120px;"><?php echo $resul->costse ?></textarea>
							</div>
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
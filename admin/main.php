
<?php session_start()?>
<?php require_once '../functions/connect.php';?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@450;700&family=Lora:wght@600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.svg" type="image/svg">
	<title></title>
</head>
<body>

	<form action="link/link.php" method="post" enctype="multipart/form-data">

	<header>
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
				$sql = $pdo->prepare("SELECT * FROM first_screen, about, review, gallery");
				$sql->execute();
				$res=$sql->fetch(PDO::FETCH_OBJ);
			?>
			</li>

			<button class="menu-open">
				<img src="../img/gamb.svg">
			</button>
		</ul>
		</div>
	</div>

	<article class="offer">
			
		<div id="carouselExampleIndicators" class="carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
				    <img src="../img/<?php echo $res->first ?>" class="s-1 d-block">
				 </div>
				<div class="carousel-item">
				    <img src="../img/<?php echo $res->second ?>" class="s-2 d-block">
				</div>
				<div class="carousel-item">
				    <img src="../img/<?php echo $res->third ?>" class="s-3 d-block">
				</div>
			</div>
		</div>

			<div class="text">
				<h1>
					<input type="text" name="title" style="width: 530px; background: none; color: #efefef;" value="<?php echo $res->title ?>">
				</h1>
				<p>
					<input type="text" name="phrase" style="background: none; color: #efefef" value="<?php echo $res->phrase ?>">
				</p>
			</div>

		</article>

		<div style="display: flex; justify-content: space-between; margin-top: 960px; position: absolute; margin-left: 370px">
			<input type="file" name="one">
			<input type="file" name="two">
			<input type="file" name="three">
		</div>
		<input style="text-align: center; margin-top: 1000px; position: absolute; width: 340px; height: 50px; margin-left: 790px" type="submit" name="save" value="Сохранить">
	</header>
	</form>
	
	<section>
		<div class="container">

			<form action="link/about.php" method="post" enctype="multipart/form-data">

			<article class="about">
				<div class="p">
					<h2>О нас</h2>
					<p><input type="text" name="description" size="60" style="height: 432px" value="<?php echo $res->description ?>"></p>
				</div>

				<img class="four img-fluid" src="../img/<?php echo $res->fourth ?>">
				<img class="five img-fluid" src="../img/<?php echo $res->fifth ?>">
				
			</article>
			<div style="display: flex; margin-left: 715px;">
				<input type="file" name="four" style="width: 155px; height: 35px; margin-right: 130px; ">
				<input type="file" name="five" style="width: 155px; height: 35px;">
			</div>
				<br>

				<input style="text-align: center; width: 340px; height: 50px; margin-left: 500px; margin-top: 50px;" name="save" type="submit" value="Сохранить">
			</form>

		</div>

		<form action="link/review.php" method="post">
		<article class="review">
				<div class="container">

		   		<h2>Отзывы</h2>

		        <div id="carouselExample" class="carousel slide">
				  	<div class="carousel-inner">

					<div class="carousel-item active">
						<div class="head">
						    <div class="round"></div>
						    <div class="h">
						    	<p><input type="text" name="name" style="background: none; color: #efefef; width: 150px" value="<?php echo $res->name ?>"></p>
						        <p class="star">
						        	<input type="text" name="star" style="background: none; color: #D0A73E; font-size: 20px; width: 110px" value="<?php echo $res->star ?>">
						        </p>
						    </div>
						    <p class="date"><input type="text" name="data" style="background: none; color: #efefef; width: 83px;" value="<?php echo $res->data ?>"></p>
						</div>

						<p class="r"><input type="text" name="view" style="background: none; color: #efefef; width: 1070px" value="<?php echo $res->view ?>"></p>
					</div>

					<div class="carousel-item">
					   	<div class="head">
						   	<div class="round"></div>
						    <div class="h">
						        <p><input type="text" name="names" style="background: none; width: 150px; color: #efefef" value="<?php echo $res->names ?>"></p>
						        <p class="star">
						            <input type="text" name="stars" style="background: none; color: #D0A73E; font-size: 20px; width: 110px;" value="<?php echo $res->stars ?>">
						        </p>
						    </div>
						    <p class="date"><input type="text" name="datas" style="background: none; color: #efefef; width: 83px" value="<?php echo $res->datas ?>"></p>
						</div>

						    <p class="r"><input type="text" name="views" style="background: none; color: #efefef; width: 1070px" value="<?php echo $res->views ?>"></p>
					</div>
					<div class="carousel-item">
					    <div class="head">
						    <div class="round"></div>
						    <div class="h">
						        <p><input type="text" name="nameth" style="background: none; width: 150px; color: #efefef" value="<?php echo $res->nameth ?>"></p>
						        <p class="star">
						            <input type="text" name="starth" style="color: #D0A73E; font-size: 20px; background:none; width: 110px" value="<?php echo $res->starth ?>">
						        </p>
						    </div>
						    <p class="date"><input type="text" name="datath" style="background: none; width: 83px" value="<?php echo $res->datath ?>"></p>
						</div>

						<p class="r"><input type="text" name="viewth" style="background: none; color: #efefef; width: 1070px" value="<?php echo $res->viewth ?>"></p>
					</div>
					<div class="carousel-item">
					    <div class="head">
						    <div class="round"></div>
						    <div class="h">
						        <p><input type="text" name="namef" style="background: none; width: 150px; color: #efefef" value="<?php echo $res->namef ?>"></p>
						        <p class="star">
						            <input type="text" name="starf" style="color: #D0A73E; font-size: 20px; background: none; width: 110px" value="<?php echo $res->starf ?>">
						        </p>
						    </div>
						    <p class="date"><input type="text" name="dataf"  style="background: none; width: 83px; color: #efefef" value="<?php echo $res->dataf ?>"></p>
						</div>

						<p class="r"><input type="text" name="viewf" style="background: none; color: #efefef; width: 1070px" value="<?php echo $res->viewf ?>"></p>
					</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>

				</div>  

				<input style="text-align: center; width: 340px; height: 50px; margin-left: 730px; margin-top: 50px;" name="save" type="submit" value="Сохранить">
			</article>
		</form>
			
		    <article class="form">
		    	<div class="container">

		    		<h2>Оставьте свой отзыв</h2>

		    		<div class="name">
		    			<input type="text" placeholder="Имя" name="name">
		    		</div>
		    		<div class="email">
		    			<input type="text" placeholder="E-mail" name="e-mail">
		    		</div>
		    		<textarea name="comment" id="" cols="45" rows="20" placeholder="Поделитесь впечатлениями"></textarea>

		    		<div class="rating-area">
						<input type="radio" id="star-5" name="rating" value="5">
						<label for="star-5" title="Оценка «5»"></label>	
						<input type="radio" id="star-4" name="rating" value="4">
						<label for="star-4" title="Оценка «4»"></label>    
						<input type="radio" id="star-3" name="rating" value="3">
						<label for="star-3" title="Оценка «3»"></label>  
						<input type="radio" id="star-2" name="rating" value="2">
						<label for="star-2" title="Оценка «2»"></label>    
						<input type="radio" id="star-1" name="rating" value="1">
						<label for="star-1" title="Оценка «1»"></label>
					</div>

		    		<div class="leave">
		    			<input type="submit" value="Оставить отзыв" id="submit" class="leave" name="submit">
		    		</div>
		    			
		    		<form action="main.php" method="post" id="leave"></form>

		    	</div>
		    </article>

			<!--<form action="" method="post " enctype="multipart/form-data">-->
			<article class="gallery">
				<div class="container">

					<h2>Галерея</h2>

					<div class="str_1">
						<img src="../img/<?php echo $res->eight ?>">
						<img src="../img/<?php echo $res->nine ?>">
						<img src="../img/<?php echo $res->ten ?>">
					</div>
				<!--	<div style="display: flex; margin-bottom: 10px; justify-content: space-between">
						<input type="file" name="eight" style="width: 155px;">
						<input type="file" name="nine" style="width: 155px;">
						<input type="file" name="ten" style="width: 155px;">
					</div>-->

					<div class="str_2">
						<img src="../img/<?php echo $res->eleven ?>">
						<img src="../img/<?php echo $res->twelve ?>">
						<img src="../img/<?php echo $res->thirteen ?>">
						<img src="../img/<?php echo $res->fourteen ?>">
						<img src="../img/<?php echo $res->fifteen ?>">
					</div>
				<!--	<div style="display: flex; margin-top: 10px; justify-content: space-between;">
						<input type="file" name="eleven" style="width: 155px">
						<input type="file" name="twelve" style="width: 155px">
						<input type="file" name="thirteen" style="width: 155px">
						<input type="file" name="fourteen" style="width: 155px">
						<input type="file" name="fifteen" style="width: 155px">
					</div>
					
				</div>

				<input style="text-align: center; width: 340px; height: 50px; margin-left: 790px; margin-top: 50px;" name="save" type="submit" value="Сохранить">
			</article>
		</form>-->
			
		</section>

		<footer>
			<p>©2024 All Rights Reserved</p>
		</footer>
	</section>
	
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
<?php 

	$user = "root";
	$password = "";
	$host = "localhost";
	$db = "coffee";
	$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
	$pdo = new PDO($dbh,$user,$password);
	?>

<?php
	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['one']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['one']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg')) {
		if ($_FILES['one']['name'] < 1915 * 945) {
			$upload='../img/'.$_FILES['one']['name'];

			if(move_uploaded_file($_FILES['one']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	
	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['two']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['two']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg')) {
		if ($_FILES['two']['name'] < 1915 * 945) {
			$upload='../img/'.$_FILES['two']['name'];

			if(move_uploaded_file($_FILES['two']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['three']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['three']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg')) {
		if ($_FILES['three']['name'] < 1915 * 945) {
			$upload='../img/'.$_FILES['three']['name'];

			if(move_uploaded_file($_FILES['three']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	$title=$_POST['title'];
	$phrase=$_POST['phrase'];
	$row="UPDATE first_screen SET title=:title,phrase=:phrase,first=:first,second=:second,third=:third";
	$query=$pdo->prepare($row);
	$query->execute(["title"=>$title,"phrase"=>$phrase,"first"=>$_FILES['one']['name'],"second"=>$_FILES['two']['name'],"third"=>$_FILES['three']['name']]);
	echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../main.php">';
	?>

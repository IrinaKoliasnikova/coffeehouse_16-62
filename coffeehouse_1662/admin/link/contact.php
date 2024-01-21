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
			if (preg_match("/$item$/", $_FILES['vk']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['vk']['tmp_name']);
	if ($type && ($type['mime'] != 'image/svg')) {
		if ($_FILES['vk']['name']<53 * 30) {
			$upload='../img/'.$_FILES['vk']['name'];

			if(move_uploaded_file($_FILES['vk']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	else exit("Размер файла превышает допустимые значения");
	}

	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['insta']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['insta']['tmp_name']);
	if ($type && ($type['mime'] != 'image/svg')) {
		if ($_FILES['insta']['name']<53 * 30) {
			$upload='../img/'.$_FILES['insta']['name'];

			if(move_uploaded_file($_FILES['insta']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	else exit("Размер файла превышает допустимые значения");
	}

	}

	$time_of_work=$_POST['time_of_work'];
	$adress=$_POST['adress'];
	$row="UPDATE contacts SET time_of_work=:time_of_work,adress=:adress,vk=:vk,instagram=:instagram";
	$query=$pdo->prepare($row);
	$query->execute(["time_of_work"=>$time_of_work,"adress"=>$adress,"vk"=>$_FILES['vk']['name'], "instagram"=>$_FILES['insta']['name']]);
	echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../contact.php">';
	?>
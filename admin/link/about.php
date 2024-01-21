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
			if (preg_match("/$item$/", $_FILES['four']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['four']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['four']['name']<280 * 490) {
			$upload='../img/'.$_FILES['four']['name'];

			if(move_uploaded_file($_FILES['four']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}
	
	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['five']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['five']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['five']['name']<355 * 490) {
			$upload='../img/'.$_FILES['five']['name'];

			if(move_uploaded_file($_FILES['five']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	$description=$_POST['description'];
	$sql="UPDATE about SET description=:description,fourth=:fourth,fifth=:fifth";
	$query=$pdo->prepare($sql);
	$query->execute(["description"=>$description,"fourth"=>$_FILES['four']['name'], "fifth"=>$_FILES['five']['name']]);
	echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../main.php">';
	?>
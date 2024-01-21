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
			if (preg_match("/$item$/", $_FILES['eight']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['eight']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['eight']['name']<566 * 390) {
			$upload='../img/'.$_FILES['eight']['name'];

			if(move_uploaded_file($_FILES['eight']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['nine']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['nine']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['nine']['name']<424 * 390) {
			$upload='../img/'.$_FILES['nine']['name'];

			if(move_uploaded_file($_FILES['nine']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['ten']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['ten']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['ten']['name']<513 * 390) {
			$upload='../img/'.$_FILES['ten']['name'];

			if(move_uploaded_file($_FILES['ten']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['eleven']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['eleven']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['eleven']['name']<298 * 390) {
			$upload='../img/'.$_FILES['eleven']['name'];

			if(move_uploaded_file($_FILES['eleven']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['twelve']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['twelve']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['twelve']['name']<252 * 390) {
			$upload='../img/'.$_FILES['twelve']['name'];

			if(move_uploaded_file($_FILES['twelve']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['thirteen']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['thirteen']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['thirteen']['name']<252 * 390) {
			$upload='../img/'.$_FILES['thirteen']['name'];

			if(move_uploaded_file($_FILES['thirteen']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['fourteen']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['fourteen']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['fourteen']['name']<252 * 390) {
			$upload='../img/'.$_FILES['fourteen']['name'];

			if(move_uploaded_file($_FILES['fourteen']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	if(isset($_POST['save'])) {
		//Список недопустимых расширений
		$list=['.php', '.zip', '.js', '.html', '.pdf', '.txt', '.rar', 'docx'];
		foreach ($list as $item) {
			if (preg_match("/$item$/", $_FILES['fifteen']['name']))exit("Расширение файла не подходит");
		}
		
	$type=getimagesize($_FILES['fifteen']['tmp_name']);
	if ($type && ($type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
		if ($_FILES['fifteen']['name']<263 * 390) {
			$upload='../img/'.$_FILES['fifteen']['name'];

			if(move_uploaded_file($_FILES['fifteen']['tmp_name'], $upload)) echo "Файл загружен";
			else echo "Ошибка при загрузке файла";
		}

	}
	else exit("Тип файла не подходит");
	}

	$picture="UPDATE gallery SET eight=:eight,nine=:nine,ten=:ten,eleven=:eleven,twelve=:twelve,thirteen=:thirteen,fourteen=:fourteen,fifteen=:fifteen";
	$query=$pdo->prepare($picture);
	$query->execute(["eight"=>$_FILES['eight']['name'],"nine"=>$_FILES['nine']['name'],"ten"=>$_FILES['ten']['name'],"eleven"=>$_FILES['eleven']['name'],"twelve"=>$_FILES['twelve']['name'],"thirteen"=>$_FILES['thirteen']['name'],"fourteen"=>$_FILES['fourteen']['name'],"fifteen"=>$_FILES['fifteen']['name']]);
	echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../main.php">';
?>
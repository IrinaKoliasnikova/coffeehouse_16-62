<?php 

	$user = "root";
	$password = "";
	$host = "localhost";
	$db = "coffee";
	$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
	$pdo = new PDO($dbh,$user,$password);
	?>

<?php 
	$titlef=$_POST['titlef'];
	$titles=$_POST['titles'];
	$titleth=$_POST['titleth'];
	$titlefo=$_POST['titlefo'];
	$titlefi=$_POST['titlefi'];
	$titlesix=$_POST['titlesix'];
	$titlese=$_POST['titlese'];
	$dishf=$_POST['dishf'];
	$dishs=$_POST['dishs'];
	$dishth=$_POST['dishth'];
	$dishfo=$_POST['dishfo'];
	$dishfi=$_POST['dishfi'];
	$dishsix=$_POST['dishsix'];
	$dishse=$_POST['dishse'];
	$volumef=$_POST['volumef'];
	$volumes=$_POST['volumes'];
	$volumeth=$_POST['volumeth'];
	$volumefo=$_POST['volumefo'];
	$volumefi=$_POST['volumefi'];
	$costf=$_POST['costf'];
	$costs=$_POST['costs'];
	$costth=$_POST['costth'];
	$costfo=$_POST['costfo'];
	$costfi=$_POST['costfi'];
	$costsix=$_POST['costsix'];
	$costse=$_POST['costse'];
	$row="UPDATE menu SET titlef=:titlef,titles=:titles,titleth=:titleth,titlefo=:titlefo,titlefi=:titlefi,titlesix=:titlesix,titlese=:titlese,dishf=:dishf,dishs=:dishs,dishth=:dishth,dishfo=:dishfo,dishfi=:dishfi,dishsix=:dishsix,dishse=:dishse,volumef=:volumef,volumes=:volumes,volumeth=:volumeth,volumefo=:volumefo,volumefi=:volumefi,costf=:costf,costs=:costs,costth=:costth,costfo=:costfo,costfi=:costfi,costsix=:costsix,costse=:costse";
	$query=$pdo->prepare($row);
	$query->execute(["titlef"=>$titlef,"titles"=>$titles,"titleth"=>$titleth,"titlefo"=>$titlefo,"titlefi"=>$titlefi,"titlesix"=>$titlesix,"titlese"=>$titlese,"dishf"=>$dishf,"dishs"=>$dishs,"dishth"=>$dishth,"dishfo"=>$dishfo,"dishfi"=>$dishfi,"dishsix"=>$dishsix,"dishse"=>$dishse,"volumef"=>$volumef,"volumes"=>$volumes,"volumeth"=>$volumeth,"volumefo"=>$volumefo,"volumefi"=>$volumefi,"costf"=>$costf,"costs"=>$costs,"costth"=>$costth,"costfo"=>$costfo,"costfi"=>$costfi,"costsix"=>$costsix,"costse"=>$costse]);
	echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../menu.php">';

?>
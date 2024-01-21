<?php 

	$user = "root";
	$password = "";
	$host = "localhost";
	$db = "coffee";
	$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
	$pdo = new PDO($dbh,$user,$password);
	?>

<?php 
	$name=$_POST['name'];
	$star=$_POST['star'];
	$data=$_POST['data'];
	$view=$_POST['view'];
	$names=$_POST['names'];
	$stars=$_POST['stars'];
	$datas=$_POST['datas'];
	$views=$_POST['views'];
	$nameth=$_POST['nameth'];
	$starth=$_POST['starth'];
	$datath=$_POST['datath'];
	$viewth=$_POST['viewth'];
	$namef=$_POST['namef'];
	$starf=$_POST['starf'];
	$dataf=$_POST['dataf'];
	$viewf=$_POST['viewf'];
	$rev="UPDATE review SET name=:name,star=:star,data=:data,view=:view,names=:names,stars=:stars,datas=:datas,views=:views,nameth=:nameth,starth=:starth,datath=:datath,viewth=:viewth,namef=:namef,starf=:starf,dataf=:dataf,viewf=:viewf";
	$query=$pdo->prepare($rev);
	$query->execute(["name"=>$name,"star"=>$star,"data"=>$data,"view"=>$view,"names"=>$names,"stars"=>$stars,"datas"=>$datas,"views"=>$views,"nameth"=>$nameth,"starth"=>$starth,"datath"=>$datath,"viewth"=>$viewth,"namef"=>$namef,"starf"=>$starf,"dataf"=>$dataf,"viewf"=>$viewf]);
	echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../main.php">';
?>
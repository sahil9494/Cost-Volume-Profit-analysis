<?php

session_start();




?>



<!DOCTYPE html>
<html>
<head>
	<title>Computation of cvp</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>



<?php

$selecval=$_POST["choice2"];
$valoftextbox=$_POST["textfield1"];

if($selecval=="priceinc"){
	$newprice=$_SESSION["price"]+$valoftextbox;
	$newcmperunit=$newprice-$_SESSION["variablec"];

	$newbep1=($_SESSION["fix"]/$newcmperunit);
	$newbep2=(($_SESSION["fix"]+$_SESSION["opincome"])/$newcmperunit);

	echo "Old Breakeven :".$_SESSION["bepat0"]."<br>";
	echo "New Breakeven :".$newbep1."<br>";
	echo "Number of units need to earn desired profit previously:".$_SESSION["bepatlevel"]."<br>";
	echo "Number of units need to earn desired profit now:".$newbep2."<br>";

	

}else if($selecval=="pricedec"){
	$newprice=$_SESSION["price"]-$valoftextbox;
	$newcmperunit=$newprice-$_SESSION["variablec"];

	$newbep1=($_SESSION["fix"]/$newcmperunit);
	$newbep2=(($_SESSION["fix"]+$_SESSION["opincome"])/$newcmperunit);

	echo "Old Breakeven :".$_SESSION["bepat0"]."<br>";
	echo "New Breakeven :".$newbep1."<br>";
	echo "Number of units need to earn desired profit previously:".$_SESSION["bepatlevel"]."<br>";
	echo "Number of units need to earn desired profit now:".$newbep2."<br>";

}else if($selecval=="fixedinc"){
	$newfix=$_SESSION["fix"]+$valoftextbox;

	$newbep1=(($newfix)/($_SESSION["price"]-$_SESSION["variablec"]));
	$newbep2=(($newfix+$_SESSION["opincome"])/($_SESSION["price"]-$_SESSION["variablec"]));

	echo "Old Breakeven :".$_SESSION["bepat0"]."<br>";
	echo "New Breakeven :".$newbep1."<br>";
	echo "Number of units need to earn desired profit previously:".$_SESSION["bepatlevel"]."<br>";
	echo "Number of units need to earn desired profit now:".$newbep2."<br>";
	

}else if($selecval=="fixeddec"){
	$newfix=$_SESSION["fix"]-$valoftextbox;
	$newbep1=(($newfix)/($_SESSION["price"]-$_SESSION["variablec"]));
	$newbep2=(($newfix+$_SESSION["opincome"])/($_SESSION["price"]-$_SESSION["variablec"]));

	echo "Old Breakeven :".$_SESSION["bepat0"]."<br>";
	echo "New Breakeven :".$newbep1."<br>";
	echo "Number of units need to earn desired profit previously:".$_SESSION["bepatlevel"]."<br>";
	echo "Number of units need to earn desired profit now:".$newbep2."<br>";

}else if($selecval=="variableinc"){
	$newvariable=$_SESSION["variablec"]+$valoftextbox;
	$newcmperunit=$_SESSION["price"]-$newvariable;

	$newbep1=$_SESSION["fix"]/$newcmperunit;
	$newbep2=(($_SESSION["fix"]+$_SESSION["opincome"])/$newcmperunit);

	echo "Old Breakeven :".$_SESSION["bepat0"]."<br>";
	echo "New Breakeven :".$newbep1."<br>";
	echo "Number of units need to earn desired profit previously:".$_SESSION["bepatlevel"]."<br>";
	echo "Number of units need to earn desired profit now:".$newbep2."<br>";


}else if($selecval=="variabledec"){
	$newvariable=$_SESSION["variablec"]-$valoftextbox;
	$newcmperunit=$_SESSION["price"]-$newvariable;

	$newbep1=$_SESSION["fix"]/$newcmperunit;
	$newbep2=(($_SESSION["fix"]+$_SESSION["opincome"])/$newcmperunit);

	echo "Old Breakeven :".$_SESSION["bepat0"]."<br>";
	echo "New Breakeven :".$newbep1."<br>";
	echo "Number of units need to earn desired profit previously:".$_SESSION["bepatlevel"]."<br>";
	echo "Number of units need to earn desired profit now:".$newbep2."<br>";

}
// $newcmperunit=$_SESSION[""];


// echo $_SESSION[""]."was the income on the previous page";

?>


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

	$fix=$_POST["fixedcost"];
	

	$variablec=$_POST["variablecost"];



	$price=$_POST["sellingprice"];

	$opincome=$_POST["profitstoearn"];

	$bepat0=(($fix)/($price-$variablec));

	$bepatlevel=(($fix+$opincome)/($price-$variablec));


	$selctedvalue=$_POST["choice1"];

	$salesvalueat0=$bepat0*$price;

	$salesvalueatp=$bepatlevel*$price;
	$cmratio=(($price-$variablec)/($price));


	if($selctedvalue=="qtat0"){
		echo '<h3>You chose to calculate Breakeven point at no profit.</h3><br>
		The number of units to earn zero profit are:'.$bepat0 .'<br>'.
		'The sales value would be:'.$salesvalueat0.'<br>'.
		'Also, the CM ratio is :'.$cmratio;


		;

	}
	else{
		echo '<h3>You chose to calculate Breakeven point at '.$opincome .' in profits</h3>.<br>
		The number of units to earn '. $opincome. ' $ in profit are:'.$bepatlevel.'<br>'.
		'The sales value would be:'.$salesvalueatp.'<br>'.
		'Also, the CM ratio is :'.$cmratio.'<br><br><br><br>';

	}




	?>

	<h4>Are you wondering, if you experienced changes in some of the elements such as profits,variable cost, fixed cost etc., how would that effect your needs to produce breakeven quantity?</h4>
	<p>If you wish to try these changes go ahead, press the button</p><br><br>
	<input type="button" name="changes" id="changes" value="Calculate after changes"><br>




</body>
</html>


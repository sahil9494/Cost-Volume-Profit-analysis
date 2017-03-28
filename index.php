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
	$_SESSION["fix"]=$fix;

	

	$variablec=$_POST["variablecost"];
	$_SESSION["variablec"]=$variablec;


	$price=$_POST["sellingprice"];
	$_SESSION["price"]=$price;



	$opincome=$_POST["profitstoearn"];
	$_SESSION["opincome"]=$opincome;



	$bepat0=(($fix)/($price-$variablec));
	$_SESSION["bepat0"]=$bepat0;




	$bepatlevel=(($fix+$opincome)/($price-$variablec));
	$_SESSION["bepatlevel"]=$bepatlevel;



	$selctedvalue=$_POST["choice1"];
	$_SESSION["selectedvalue"]=$selctedvalue;
	

	$salesvalueat0=$bepat0*$price;
	$_SESSION["salesvalueat0"]=$salesvalueat0;


	$salesvalueatp=$bepatlevel*$price;
	$_SESSION["salesvalueatp"]=$salesvalueatp;



	$cmratio=(($price-$variablec)/($price));
	$_SESSION["cmratio"]=$cmratio;



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
	<p>If you wish to try these changes go ahead, please choose what scenario occured:</p>
	<br><br>

	<form name="f2" action="cvp3.php" method="POST">

	<select name="choice2">
	
	<option value="priceinc">Price increased</option>
	<option value="pricedec">Price decreased</option>
	<option value="fixedinc">Fixed cost increased</option>
	<option value="fixeddec">Fixed cost decreased</option>
	<option value="variableinc">Variable cost increased</option>
	<option value="variabledec">Variable cost decreased</option>


	</select>

	<br><br>
	How much did it change by?
	<input type="text" name="textfield1">

	<br><br><br>

	Curious to know how did it change your breakeven values? GO ahead, press the button to calculate that.
	


	<input type="submit" name="submit" id="changes" value="Calculate after changes"><br>
	
	</form>

</body>
</html>


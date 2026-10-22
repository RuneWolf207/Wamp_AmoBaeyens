<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    
	<?php 
	// ===========================================================
	// 1. Make variables for: pizza price, topping price, delivery fee, number of pizzas ordered, number of toppings per pizza, and number of people at the table.
	// 2. Calculate the total price of the order, and how many slices each person gets if each pizza has 8 slices.
	// 3. Echo out the results in a user-friendly way.
	// ===========================================================

	$pizzaPrice = 12;
	$toppingPrice = 1.5;
	$deliveryFee = 2.99;
	$nrPizza = 3;
	$nrToppings = 2;
	$nrPeople = 4;
	$slicesPerPizza = 8;
	$totalPrice = ($pizzaPrice + ($toppingPrice * $nrToppings)) * $nrPizza + $deliveryFee;
	$totalSlices = $nrPizza * $slicesPerPizza;
	$slicesPerPerson = $totalSlices / $nrPeople;



	echo "The total price of the order is: €" . $totalPrice . "<br>";
	echo "Each person gets " . $slicesPerPerson . " slices of pizza.<br>";

	
	// Time: ?
	// Record: 6:59 Falco (2025)
	// Ready? Push to GIT!
	?>
	
    <a href="03-basic-operators.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="04-arrays.php class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>
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
		// Adapt the previous task (pizza shop) and remove any unnecessary variables. 
		// Make a form where the buyer will input the number of pizzas, number of toppings per pizza, and number of people at the table. 
		// When the form is submitted, calculate the total price and how many slices each person gets if each pizza has 8 slices.
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

		

		// Time: 3-10 minutes
		// Record: 6:48 Vitally (APDA, 2025)
		// Record: 7:42 Jasper (BINF, 2025)
		// Ready? Push to GIT!
	?>

	<a href="06-post.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="07-math.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>
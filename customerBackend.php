<?php
	echo "<head><link rel=\"stylesheet\" href=\"style.css\"><title>Reciept</title></head>";
	
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	echo "<h1>Checkout successful</h1>";
	echo "<h3>Account:</h3>";
	echo "<p>User: ".$_POST["email"]."<br>Password: ".$_POST["pass"]."</p><table border=1>";
	echo "<h3>Reciept:</h3>";
	echo "<tr><th>Item</th><th>Unit Price</th><th>Quantity</th><th>Price</th></tr>";
	$inven = array("Zweihander","Guisarme","Headhunter Axe");
	$price = array (500,250,150);
	$totalQ = 0;
	$totalP = 0;
	$s = 0;
	for($i = 0;$i < count($inven);$i++)
	{
		$count = $_POST["q".($i+1)];
		$totalQ += $count;
		$totalP += $price[$i]*$count;
		echo "<tr><th>".$inven[$i]."</th><td>$".$price[$i]."</td><td>".$count."</td><td>$".($price[$i]*$count)."</td></tr>";
	}
	if($_POST["ship"]=="3day")
	{
		$s=5;
	}
	else if($_POST["ship"]=="night")
	{
		$s=50;
	}
	echo "<tr><th colspan=\"3\">Shipping</th><td>$".$s."</td></tr>";
	echo "<tr><th colspan=\"2\">Total</th><th>".$totalQ."</th><th>$".($totalP+$s)."</th></tr>";
	
	echo "</table>";
?>


<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

 echo "<link rel='stylesheet' type='text/css' href='../css/style.css' />";  

	$username = $_POST['username'];
	$password = $_POST['password'];
	echo"<h1>Welcome, ".$username."</h1>";
	echo"Your password is: ".$password."<br><br>";
  
	$mouseQuant = $_POST['toymousequantity'];
	$catnipQuant = $_POST['catnipquantity'];
	$sweaterQuant = $_POST['sweaterquantity'];

    $shippingmethod = $_POST['shipping'];

	if($shippingmethod == 'free') { $shipping = 0; $shippingType="FREE SHIPPING";}	
	if($shippingmethod == 'threeday') { $shipping = 5; $shippingType="Three Day Shipping";}
	if($shippingmethod == 'overnight') { $shipping = 50; $shippingType="Overnight Shipping" ;}

	$total = ($mouseQuant*3) + ($catnipQuant*5) + ($sweaterQuant*65) + $shipping;
   
	echo printReceipt();

function printReceipt(){

	global $mouseQuant;	
	global $catnipQuant;	
	global $sweaterQuant;	
	global $shipping;
	global $shippingType;
	global $total;


	echo'<table><tr> 
		<td> </td>
		<td>Quantity</td>
		<td>Cost per Item</td>
		<td>Subtotal</td> </tr>';

	echo'<tr> 
		<td>Toy mouse</td>
		<td> '.$mouseQuant.' </td>
		<td>$3.00</td>
		<td>$'. $mouseQuant*3 .'.00 </td> </tr>';

	echo'<tr> 
		<td>Catnip</td>
		<td> '.$catnipQuant.' </td>
		<td>$5.00</td>
		<td>$'. $catnipQuant*5 .'.00 </td> </tr>';
	
	echo'<tr> 
		<td>Sweater</td>
		<td> '.$sweaterQuant.' </td>
		<td>$65.00</td>
		<td>$'. $sweaterQuant*65 .'.00 </td> </tr>';

	echo'<tr> 
		<td>Shipping</td>
		<td colspan="2"> '. $shippingType .' </td>
		<td>$'. $shipping .'.00</td> </tr>';

	echo'<tr> 
		<td colspan="3"> Total cost </td>
		<td>$'. $total .'.00</td> </tr></table>';

	
}


?>

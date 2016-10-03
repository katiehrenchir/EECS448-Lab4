<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

echo multTable();


//multiplication table printing program
function multTable() {

	echo'<table>';
	
	for( $i = 1; $i <=100; $i++) {
			echo '<tr> ';
		
		for( $j = 1; $j <= 100; $j++) {
			echo'<td align="center">';
			echo $i * $j;
			echo'</td>';
		}

			echo '</tr>';

	}
	echo'</table>';

}



?> 

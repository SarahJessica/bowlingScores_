<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Print out of scores!</title>

<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<?php
$p1 = array($_GET['p1'], 
[$_GET['p1f1b1'], $_GET['p1f1b2']], 
[$_GET['p1f2b1'], $_GET['p1f2b2']], 
[$_GET['p1f3b1'], $_GET['p1f3b2']], 
[$_GET['p1f4b1'], $_GET['p1f4b2']], 
[$_GET['p1f5b1'], $_GET['p1f5b2']], 
[$_GET['p1f6b1'], $_GET['p1f6b2']], 
[$_GET['p1f7b1'], $_GET['p1f7b2']], 
[$_GET['p1f8b1'], $_GET['p1f8b2']], 
[$_GET['p1f9b1'], $_GET['p1f9b2']],
[$_GET['p1f10b1'], $_GET['p1f10b2'], $_GET['p1f10b3']]);

$p2 = array($_GET['p2'], 
[$_GET['p2f1b1'], $_GET['p2f1b2']], 
[$_GET['p2f2b1'], $_GET['p2f2b2']], 
[$_GET['p2f3b1'], $_GET['p2f3b2']], 
[$_GET['p2f4b1'], $_GET['p2f4b2']], 
[$_GET['p2f5b1'], $_GET['p2f5b2']], 
[$_GET['p2f6b1'], $_GET['p2f6b2']], 
[$_GET['p2f7b1'], $_GET['p2f7b2']], 
[$_GET['p2f8b1'], $_GET['p2f8b2']], 
[$_GET['p2f9b1'], $_GET['p2f9b2']],
[$_GET['p2f10b1'], $_GET['p2f10b2'], $_GET['p2f10b3']]);

$p3 = array($_GET['p3'], 
[$_GET['p3f1b1'], $_GET['p3f1b2']], 
[$_GET['p3f2b1'], $_GET['p3f2b2']], 
[$_GET['p3f3b1'], $_GET['p3f3b2']], 
[$_GET['p3f4b1'], $_GET['p3f4b2']], 
[$_GET['p3f5b1'], $_GET['p3f5b2']], 
[$_GET['p3f6b1'], $_GET['p3f6b2']], 
[$_GET['p3f7b1'], $_GET['p3f7b2']], 
[$_GET['p3f8b1'], $_GET['p3f8b2']], 
[$_GET['p3f9b1'], $_GET['p3f9b2']],
[$_GET['p3f10b1'], $_GET['p3f10b2'], $_GET['p3f10b3']]);

$p4 = array($_GET['p4'], 
[$_GET['p4f1b1'], $_GET['p4f1b2']], 
[$_GET['p4f2b1'], $_GET['p4f2b2']], 
[$_GET['p4f3b1'], $_GET['p4f3b2']], 
[$_GET['p4f4b1'], $_GET['p4f4b2']], 
[$_GET['p4f5b1'], $_GET['p4f5b2']], 
[$_GET['p4f6b1'], $_GET['p4f6b2']], 
[$_GET['p4f7b1'], $_GET['p4f7b2']], 
[$_GET['p4f8b1'], $_GET['p4f8b2']], 
[$_GET['p4f9b1'], $_GET['p4f9b2']],
[$_GET['p4f10b1'], $_GET['p4f10b2'], $_GET['p4f10b3']]);

$p5 = array($_GET['p5'], 
[$_GET['p5f1b1'], $_GET['p5f1b2']], 
[$_GET['p5f2b1'], $_GET['p5f2b2']], 
[$_GET['p5f3b1'], $_GET['p5f3b2']], 
[$_GET['p5f4b1'], $_GET['p5f4b2']], 
[$_GET['p5f5b1'], $_GET['p5f5b2']], 
[$_GET['p5f6b1'], $_GET['p5f6b2']], 
[$_GET['p5f7b1'], $_GET['p5f7b2']], 
[$_GET['p5f8b1'], $_GET['p5f8b2']], 
[$_GET['p5f9b1'], $_GET['p5f9b2']],
[$_GET['p5f10b1'], $_GET['p5f10b2'], $_GET['p5f10b3']]);

$p6 = array($_GET['p6'], 
[$_GET['p6f1b1'], $_GET['p6f1b2']], 
[$_GET['p6f2b1'], $_GET['p6f2b2']], 
[$_GET['p6f3b1'], $_GET['p6f3b2']], 
[$_GET['p6f4b1'], $_GET['p6f4b2']], 
[$_GET['p6f5b1'], $_GET['p6f5b2']], 
[$_GET['p6f6b1'], $_GET['p6f6b2']], 
[$_GET['p6f7b1'], $_GET['p6f7b2']], 
[$_GET['p6f8b1'], $_GET['p6f8b2']], 
[$_GET['p6f9b1'], $_GET['p6f9b2']],
[$_GET['p6f10b1'], $_GET['p6f10b2'], $_GET['p6f10b3']]);
?>


<table id="results">
<tr>
	<th rowspan="2">Player</th>
    <th colspan="21">Frame</th>
    <th rowspan="2">Total</th>
</tr>
<tr>
	<th colspan="2">1</th>
    <th colspan="2">2</th>
    <th colspan="2">3</th>
    <th colspan="2">4</th>
    <th colspan="2">5</th>
    <th colspan="2">6</th>
    <th colspan="2">7</th>
    <th colspan="2">8</th>
    <th colspan="2">9</th>
    <th colspan="3">10</th>
</tr>

<?php
if ($p1[1][0] != null) { calcScores($p1); }
if ($p2[1][0] != null) { calcScores($p2); }
if ($p3[1][0] != null) { calcScores($p3); }
if ($p4[1][0] != null) { calcScores($p4); }
if ($p5[1][0] != null) { calcScores($p5); }
if ($p6[1][0] != null) { calcScores($p6); }
?>
</table>


<?php 
function calcScores($array){

$runningTotal = array();
$grandTotal = 0;  
/* 
maybe $grandTotal is superfluous now $displayTotal is used and all calculations including this can be removed. 
*/
$displayTotal = 0;
	
	echo "<tr>";
		echo "<td rowspan=\"2\">" . $array[0] . "</td>";
	
	for($i = 1; $i < 10; $i++) {
			if ($array[$i][0] == 10){
				echo "<td>X</td>";
				echo "<td>&nbsp;</td>";
					  if ($array[$i+1][0] == 10){
						  $runningTotal[$i] = (10 + $array[$i+1][0] + $array[$i+2][0]);
						  $grandTotal += $runningTotal[$i];
					  } else {
						  $runningTotal[$i] = (10 + $array[$i+1][0] + $array[$i+1][1]);
						  $grandTotal += $runningTotal[$i]; 
						  }
			}  else if (($array[$i][0] + $array[$i][1]) == 10) {
					echo "<td>" . $array[$i][0] . "</td>";
					echo "<td>/</td>";
				$runningTotal[$i] = (10 + $array[$i+1][0]);
				$grandTotal += $runningTotal[$i];
				} else {
					echo "<td>" . $array[$i][0] . "</td>";
					echo "<td>" . $array[$i][1] . "</td>";
					$runningTotal[$i] = ($array[$i][0] + $array[$i][1]);
					$grandTotal += $runningTotal[$i];
					}
			
		} // end of $i for loop

// for frame 10 (with up to 3 balls)	
	if ($array[10][0] == 10) {
			echo "<td>X</td>";
			$runningTotal[10] = (10 + $array[10][1] + $array[10][2]);
			$grandTotal += $runningTotal[10];
				if ($array[10][1] == 10) {
					echo "<td>X</td>";
						if ($array[10][2] == 10) {echo "<td>X</td>";} 
						else {echo "<td>" . $array[10][2] . "</td>";}
					$runningTotal[10] += (10 + $array[10][2]);
					$grandTotal += $runningTotal[10];
					} else if (($array[10][1] + $array[10][2]) == 10 ){
						echo "<td>" . $array[10][1] . "</td>";
						echo "<td>" . $array[10][2] . "</td>";
						$runningTotal[10] += 10;
						$grandTotal += 10;	
						}
			
		} else if (($array[10][0] + $array[10][1]) == 10) {
			echo "<td>". $array[10][0] ."</td>";
			echo "<td>/</td>";
			$runningTotal[10] = (10 + $array[10][2]);
			$grandTotal += $runningTotal[10];
				if ($array[10][2] == 10){
						echo "<td>X</td>";
						$runningTotal[10] += 10;
						$grandTotal += 10;
					} else {
						echo "<td>". $array[10][2] ."</td>";
						$runningTotal[10] += $array[10][2];
						$grandTotal += $array[10][2];
						}		
			} else {
				echo "<td>". $array[10][0] ."</td>";
				echo "<td>". $array[10][1] ."</td>";
				echo "<td>&nbsp;</td>";
				$runningTotal[10] = ($array[10][0] + $array[10][1]);
				$grandTotal += $runningTotal[10];
				}
	
	
	// holds $grandTotal;
		echo "<td rowspan=\"2\">". $grandTotal ."</td>"; 
	echo "</tr>";
	
	//frame scores
	echo "<tr>";
			
		for($j = 1; $j < 10; $j++){
			$displayTotal += $runningTotal[$j];
			echo "<td colspan=\"2\">" . $displayTotal . "</td>";
		}
		$displayTotal += $runningTotal[10];
		echo "<td colspan=\"3\">" . $displayTotal . "</td>";
	echo "</tr>";
	
}// end of calcScores
?>

</body>
</html>
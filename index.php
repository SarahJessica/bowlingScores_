<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculate Your Bowling Scores</title>
</head>

<body>
<form method="get" action="scores.php">
	<table>
		<tr>
        	<th></th>
            <th colspan="3">Player 1</th>
            <th colspan="3">Player 2</th>
            <th colspan="3">Player 3</th>
            <th colspan="3">Player 4</th>
            <th colspan="3">Player 5</th>
            <th colspan="3">Player 6</th>
        </tr>
        <tr>
        	<td></td>
        	<td colspan="3"><input type="text" name="p1"></td>
            <td colspan="3"><input type="text" name="p2"></td>
            <td colspan="3"><input type="text" name="p3"></td>
            <td colspan="3"><input type="text" name="p4"></td>
            <td colspan="3"><input type="text" name="p5"></td>
            <td colspan="3"><input type="text" name="p6"></td>
        </tr>
        <tr>
        	<th>Frame 1</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f1b1"></td>
            <td><input type="number" min="0" max="10" name="p1f1b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f1b1"></td>
            <td><input type="number" min="0" max="10" name="p2f1b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f1b1"></td>
            <td><input type="number" min="0" max="10" name="p3f1b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f1b1"></td>
            <td><input type="number" min="0" max="10" name="p4f1b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f1b1"></td>
            <td><input type="number" min="0" max="10" name="p5f1b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f1b1"></td>
            <td><input type="number" min="0" max="10" name="p6f1b2"></td>
        </tr>
        <tr>
        	<th>Frame 2</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f2b1"></td>
            <td><input type="number" min="0" max="10" name="p1f2b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f2b1"></td>
            <td><input type="number" min="0" max="10" name="p2f2b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f2b1"></td>
            <td><input type="number" min="0" max="10" name="p3f2b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f2b1"></td>
            <td><input type="number" min="0" max="10" name="p4f2b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f2b1"></td>
            <td><input type="number" min="0" max="10" name="p5f2b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f2b1"></td>
            <td><input type="number" min="0" max="10" name="p6f2b2"></td>
        </tr>
        <tr>
        	<th>Frame 3</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f3b1"></td>
            <td><input type="number" min="0" max="10" name="p1f3b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f3b1"></td>
            <td><input type="number" min="0" max="10" name="p2f3b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f3b1"></td>
            <td><input type="number" min="0" max="10" name="p3f3b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f3b1"></td>
            <td><input type="number" min="0" max="10" name="p4f3b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f3b1"></td>
            <td><input type="number" min="0" max="10" name="p5f3b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f3b1"></td>
            <td><input type="number" min="0" max="10" name="p6f3b2"></td>
        </tr>
        <tr>
        	<th>Frame 4</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f4b1"></td>
            <td><input type="number" min="0" max="10" name="p1f4b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f4b1"></td>
            <td><input type="number" min="0" max="10" name="p2f4b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f4b1"></td>
            <td><input type="number" min="0" max="10" name="p3f4b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f4b1"></td>
            <td><input type="number" min="0" max="10" name="p4f4b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f4b1"></td>
            <td><input type="number" min="0" max="10" name="p5f4b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f4b1"></td>
            <td><input type="number" min="0" max="10" name="p6f4b2"></td>
        </tr>
        <tr>
        	<th>Frame 5</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f5b1"></td>
            <td><input type="number" min="0" max="10" name="p1f5b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f5b1"></td>
            <td><input type="number" min="0" max="10" name="p2f5b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f5b1"></td>
            <td><input type="number" min="0" max="10" name="p3f5b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f5b1"></td>
            <td><input type="number" min="0" max="10" name="p4f5b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f5b1"></td>
            <td><input type="number" min="0" max="10" name="p5f5b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f5b1"></td>
            <td><input type="number" min="0" max="10" name="p6f5b2"></td>
        </tr>
        <tr>
        	<th>Frame 6</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f6b1"></td>
            <td><input type="number" min="0" max="10" name="p1f6b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f6b1"></td>
            <td><input type="number" min="0" max="10" name="p2f6b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f6b1"></td>
            <td><input type="number" min="0" max="10" name="p3f6b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f6b1"></td>
            <td><input type="number" min="0" max="10" name="p4f6b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f6b1"></td>
            <td><input type="number" min="0" max="10" name="p5f6b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f6b1"></td>
            <td><input type="number" min="0" max="10" name="p6f6b2"></td>
        </tr>
        <tr>
        	<th>Frame 7</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f7b1"></td>
            <td><input type="number" min="0" max="10" name="p1f7b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f7b1"></td>
            <td><input type="number" min="0" max="10" name="p2f7b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f7b1"></td>
            <td><input type="number" min="0" max="10" name="p3f7b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f7b1"></td>
            <td><input type="number" min="0" max="10" name="p4f7b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f7b1"></td>
            <td><input type="number" min="0" max="10" name="p5f7b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f7b1"></td>
            <td><input type="number" min="0" max="10" name="p6f7b2"></td>
        </tr>
        <tr>
        	<th>Frame 8</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f8b1"></td>
            <td><input type="number" min="0" max="10" name="p1f8b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f8b1"></td>
            <td><input type="number" min="0" max="10" name="p2f8b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f8b1"></td>
            <td><input type="number" min="0" max="10" name="p3f8b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f8b1"></td>
            <td><input type="number" min="0" max="10" name="p4f8b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f8b1"></td>
            <td><input type="number" min="0" max="10" name="p5f8b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f8b1"></td>
            <td><input type="number" min="0" max="10" name="p6f8b2"></td>
        </tr>
        <tr>
        	<th>Frame 9</th>
        	<td colspan="2"><input type="number" min="0" max="10" name="p1f9b1"></td>
            <td><input type="number" min="0" max="10" name="p1f9b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p2f9b1"></td>
            <td><input type="number" min="0" max="10" name="p2f9b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p3f9b1"></td>
            <td><input type="number" min="0" max="10" name="p3f9b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p4f9b1"></td>
            <td><input type="number" min="0" max="10" name="p4f9b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p5f9b1"></td>
            <td><input type="number" min="0" max="10" name="p5f9b2"></td>
            <td colspan="2"><input type="number" min="0" max="10" name="p6f9b1"></td>
            <td><input type="number" min="0" max="10" name="p6f9b2"></td>
        </tr>
        <tr>
        	<th>Frame 10</th>
        	<td><input type="number" min="0" max="10" name="p1f10b1"></td>
            <td><input type="number" min="0" max="10" name="p1f10b2"></td>
            <td><input type="number" min="0" max="10" name="p1f10b3"></td>
            <td><input type="number" min="0" max="10" name="p2f10b1"></td>
            <td><input type="number" min="0" max="10" name="p2f10b2"></td>
            <td><input type="number" min="0" max="10" name="p2f10b3"></td>
            <td><input type="number" min="0" max="10" name="p3f10b1"></td>
            <td><input type="number" min="0" max="10" name="p3f10b2"></td>
            <td><input type="number" min="0" max="10" name="p3f10b3"></td>
            <td><input type="number" min="0" max="10" name="p4f10b1"></td>
            <td><input type="number" min="0" max="10" name="p4f10b2"></td>
            <td><input type="number" min="0" max="10" name="p4f10b3"></td>
            <td><input type="number" min="0" max="10" name="p5f10b1"></td>
            <td><input type="number" min="0" max="10" name="p5f10b2"></td>
            <td><input type="number" min="0" max="10" name="p5f10b3"></td>
            <td><input type="number" min="0" max="10" name="p6f10b1"></td>
            <td><input type="number" min="0" max="10" name="p6f10b2"></td>
            <td><input type="number" min="0" max="10" name="p6f10b3"></td>
            
        </tr>
	</table>
	<input type="submit">
</form>
</body>
</html>
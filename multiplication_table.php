<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table</title>
	<style type="text/css">
		td {
			padding: 5px;
			text-align: center;
			font-weight: normal;
			font-size: 20px;
		}
        h1 {
            margin-top: 150px;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            color: #0a0a0a;
        }
        body {
			margin: 0;
			padding: 0;
			display: flex;
			flex-direction: column;
			align-items: center;
			font-family: Cambria, sans-serif;
			font-size: 16px;
		} 
	</style>
</head>
<body>
    <h1> Multiplication Table </h1>
	<?php
		$color1 = $_POST['color1'] ?? 'white'; // default color1 is white
		$color2 = $_POST['color2'] ?? 'lightgray'; // default color2 is lightgray

		echo "<table align='center'>";
		for ($i = 0; $i <= 10; $i++) {
			echo "<tr>";
			for ($j = 0; $j <= 10; $j++) {
				$num = $i * $j;
				$color = ($i % 2 == 0 && $j % 2 == 0) || ($i % 2 == 1 && $j % 2 == 1) ? $color1 : $color2;
				echo "<td style='background-color: $color;'>$num</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?> <br>
	<form method="post" align="center">
		Color 1: <input type="color" name="color1" value="<?php echo $color1; ?>">
		Color 2: <input type="color" name="color2" value="<?php echo $color2; ?>">
        &nbsp;&nbsp;&nbsp;
		<input type="submit" value="Update Colors">
	</form>
</body>
</html>

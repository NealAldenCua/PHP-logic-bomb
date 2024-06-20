<!DOCTYPE html>
<html>
<head>
	<title>Logic Bomb MP</title>
</head>
<body>
	<form action="index.php" method="post">
		<label for="num1">Number 1:</label>
		<input type="number" id="num1" name="num1" min="1" max="5"><br>

		<label for="num2">Number 2:</label>
		<input type="number" id="num2" name="num2" min="1" max="5"><br>

		<input type="submit" value="Add">
	</form>

	<?php
	if(isset($_POST['num1']) && isset($_POST['num2'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		if(is_numeric($num1) && is_numeric($num2)) {
			$result = $num1 + $num2;

		switch ($result) {
			case 2:
				//gp to this website
				header("Location: https://hacker-simulator.com/");
				exit();

			case 4:
					//infinite loop 
					for (;;) {
							echo "STEPPED ON A LANDMINE!!!!!";
						}
				exit();

			case 6:
				// Open cmd 5 times
				for ($i = 0; $i < 5; $i++) {
					exec("start cmd.exe");
				}

			case 8:
				// Create a new file and write to it
				$file = fopen("account no.txt", "w");
				$words = "This is a list of account numbers:\n411759854513 \n339938992240 \n595911926093 \n789605825145 \nJoke lang ito hahahha for Finals MP lang";
				fwrite($file, $words);
				fclose($file);
				echo "<p>Account Details Listed!</p>";
				break;

			case 10:
				// go to a youtube vid
				header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
				exit();

			default:
				echo "<p>The sum of $num1 and $num2 is $result</p>";
			}

		} else {
			echo "<p>Please enter valid numbers</p>";
		}
	}
	?>
</body>
</html>
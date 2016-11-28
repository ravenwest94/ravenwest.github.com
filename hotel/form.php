<html>
	<head>
	<meta charset="utf-8">
	<title>Форма</title>
	</head>

	<body>

	<?php
		echo "<p>Класс номера:" . $_POST["SelectClass"] . "</p>";
		echo "<p>Фамилия: " . $_POST["FistName"] . "</p>";
		echo "<p>Имя: " . $_POST["SecondName"] . "</p>";
		echo "<p>Отчество: " . $_POST["ThirdName"] . "</p>";
		echo "<p>Телефон: " . $_POST["phone_number"] . "</p>";	
		echo "<p>Дата: " . $_POST["order_date"] . "</p>";
	?>
	</body>
</html>
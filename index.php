<html>
	<head>
		<title>gcc tutorial</title>
	</head>
	<body>
		<h1>Hello GCC!</h1>
		<h3>
		<?php
			$timeZone = "UTC";
			$now = new Datetime("now", new DateTimeZone($timeZone));
			echo "The current time is {$now->format("Y-m-d H:i:s T")}";
		?>
		</h3>
	</body>
</html>
#!/usr/bin/php
<?php
$fp = fopen('php://stdin', 'r');
$last_line = false;
	while (true)
	{
		print("Enter a number: ");
		$message = fgets($fp, 20);
		if (!$message)
		{
			print("\n");
			exit(0);
		}
		$message = rtrim($message);
		if (!is_numeric($message))
		{
			print("'$message' is not a number\n");
		}
		else if ($message % 2 != 0)
		{
			print("The number $message is odd\n");
		}
		else
		{
			print("The number $message is even\n");
		}
	}

?>

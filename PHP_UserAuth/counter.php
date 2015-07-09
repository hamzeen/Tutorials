<?php
$visits = 1;
if(file_exists("counter.dat"))
{
	$exist_file = fopen("counter.dat", "r");
	$visits = fgets($exist_file, 255);
	$visits++;
	fclose($exist_file);

	$exist_count = fopen("counter.dat", "w");
	fputs($exist_count, $visits);
	fclose($exist_count);
}

else
{
	$new_file = fopen("counter.dat", "w");
	fputs($new_file, $visits);
	fclose($new_file);
}
?>
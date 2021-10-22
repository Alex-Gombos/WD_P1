<?php
$myfile=fopen("form.txt", "a");
if (!(empty($_POST["age"])||empty($_POST["country"])||empty($_POST["gender"])||empty($_POST["bestactor"])||empty($_POST["bestsupactor"])||empty($_POST["bestactress"]))){
	fprintf($myfile, "%s;%s;%s;%s;%s;%s", $age, $country, $gender, $bestactor, $bestsupactor, $bestactress);
	fwrite($myfile, "\n");
}
fclose($myfile);
?>
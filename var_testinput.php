<?php
// define variables and set to empty values
$ageErr = $countryErr = $genderErr = $websiteErr = $submitErr="";
$age = $country = $gender = $bestactor = $bestsupactor = $bestactress= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }
  
  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country = test_input($_POST["country"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if(empty($_POST["bestactor"]) || empty($_POST["bestsupactor"]) || empty($_POST["bestsupactor"])){
	  $submitErr = "Please choose one movie for each category";
	} else {
		$bestactor = test_input($_POST["bestactor"]);
		$bestsupactor= test_input($_POST["bestsupactor"]);
		$bestactress = test_input($_POST["bestactress"]);
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
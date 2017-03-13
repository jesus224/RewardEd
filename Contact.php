<?php

$email = "rewardedu@gmail.com";
$subject = "RewardEdu Signup";
$First_name = $_POST["F_Name"];
$Last_name = $_POST["L_Name"];
$Reply = $_POST["Email"];
$Rank1 = $_POST["rank1"];
$Rank2 = $_POST["rank2"];
$Rank3 = $_POST["rank3"];


$Message = "From: " . $First_name. " ".$Last_name.  "\n" . "Email: " .$Reply. "\n
			Finding best credit card: " .$Rank1. "\n
			Earning the Most Reward Points: " .$Rank2. "\n
			Redeeming your points efficiently: " .$Rank3. "\n";

@mail($email, $subject, $Message);
echo "Thank You for your response";

?>
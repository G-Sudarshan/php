<?php
 

$email = "11sudarshang@gmail.com";
$pattern = "/^[[:alnum:]\.]{1,}[@][[:alnum:]]{1,}[\.][a-z]{1,}/";
$result = preg_match($pattern,$email);

if($result)
{
	echo "Valid email";
}
else
{
	echo "Invalid email";
}
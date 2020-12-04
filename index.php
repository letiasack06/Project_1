<?php

if(isset($_POST["lessons"])){
	$var=$_POST["lessons"];
}
else{
$var=array("Tony","Frank","VICTOR");
}

$var3=6;
$var2="<html>
<head></head>
<body><h1>Hello from creativeonline school.com</h1>
<form action='http://localhost/lessons/index.php'method = 'POST'>
<input type='text' name='name'>Your Name</input><br/>
<b>what lessons do you want to learn?</b><br>
<select name='lessons[]'size='4' multiple>
<option value='my SQL'>MY SQL</option>
<option value='web_dev'>WEB DEV</option>
<option value='Oracle'>ORACLE</option>
<option value='Javascript'>JAVASCRIPT</option>
</select>
<input type='submit' value='submit'>
</form></body>
</html>";

//array_push($var, "Billy");
//array_pop($var);
//$var[2]='Arnold';

foreach($var as $index)
{
	
		echo $index." ";
	echo"<br>";
}

//print_r($var);
echo $var2;


?>
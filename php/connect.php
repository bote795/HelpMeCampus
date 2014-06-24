<?php
$username = "root";
$password = "1";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die('could not connect to mysql' . mysql_error());
echo "Connected to MySQL<br>";
//select a database to work with
$selected = mysql_select_db("school",$dbhandle) or die('could not connect to school db' . mysql_error());

//cleanup the errors

function show_errors($action){
	$error = false;
	if(!empty($action['result']))
    {
		$error = "<ul class=\"alert $action[result]\">"."\n";
		if(is_array($action['text'])){	
			//loop out each error
			foreach($action['text'] as $text){
				$error .= "<li><p>$text</p></li>"."\n";
			}	
		}else{
			//single error
			$error .= "<li><p>$action[text]</p></li>";
		}
		$error .= "</ul>"."\n";
	}
	return $error;
}
?>
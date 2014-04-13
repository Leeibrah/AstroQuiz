<?php
$host="localhost"; //replace with your hostname 
$username="root"; //replace with your username 
$password="ttunawesmake"; //replace with your password 
$db_name="astroquiz"; //replace with your database 
$con=mysql_connect('localhost', 'root', '')or die('cannot connect'); 
mysql_select_db("$db_name")or die("cannot select DB");

	// while ($row = mysql_fetch_row($result))
	// {
	//     $arr = array();
	//     for($row as $key => $value){
	//         // $key is your column name
	//         // $value is the value of $row[$key]

	//         // Copy data on clean array...
	//         // $arr[$key] = $value;
	//          $rows[] = array($row['question'],$row['answer1']);
	//     }

	//     // Process on column name...

	//     $rows[] = $arr;
	//     // echo 
	// }

//mysql_close($db_name);
// echo json_encode($json); 
// echo json_encode($arr);
// please refer to our PHP JSON encode function tutorial for learning json_encode function in detail 

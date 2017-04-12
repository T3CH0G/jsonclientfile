<?php

//connect to db
mysql_connect("jsondb","root","") or die(mysql_error());
mysql_select_db("users") or die(mysql_error());


//call passed in functions
if(isset($_GET['method'] && !empty($_GET['method'])) {
	if(function_exists($_GET['method'])){
		$_GET['method']();
	}
}


//methods
function getAllUsers(){
	$user_sql = mysql_query("select * from user");
	$users = array();
	while($user = mysql_fetch_array($user_sql)) {
		$users[]=$user;
	}
	$users = json_encode($users);
	echo $_GET['jsoncallback'] . '(' . $users . ')';

}

?>
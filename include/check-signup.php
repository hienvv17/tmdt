<?php
include_once('../database/connect.php');
function checkInput($input){
	$inputContent = "NULL";
	if (!empty($_POST[$input])) {
		$inputContent = $_POST[$input];
	}
	return $inputContent;
}
if (!empty($_POST)) {
    $name 				= checkInput('name');
    $password			= checkInput('password');
    $email 			    = checkInput('email'); 
    $query = "select * from users
        where email = '".$email."' and role = 'client'";
    $result = mysqli_query($con, $query);
    
    if (!empty($result) && $result->num_rows > 0) {
        echo "Duplicate account";        
    } else {
        $query = "insert into users(name, password, email)
            values('".$name."', '".$password."', '".$email."')";
        $rs = mysqli_query($con, $query) or die(mysqli_error($con));
        if ($rs) {
            echo "Sucessfull";                
        }
        else{
            echo $rs;
        }
    }
    
}

?>
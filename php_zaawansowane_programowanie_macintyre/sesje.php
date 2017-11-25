<?php

session_start();
	
if (!isset($_SESSION['user'])){
    
    session_regenerate_id();
    $_SESSION['user'] = "id user";
    $_SESSION['user_data'] = "data of user";
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

}

if($_SESSION['ip'] != $_SERVER['REMOTE_ADDR']){
    //error block
}

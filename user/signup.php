<?php

//get database conn
include_once '../config/Database.php';

//instanced user data

include_once '../objects/User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

$user->username = $_POST['username'];
$user->password = $_POST['password'];
$user->created = date('Y-m-d H:i:s');

if($user->signup()){
    $user_arr=array(
        "status"=>true,
        "message"=> "Succesfull signup!",
        "id" =>$user->id,
        "username"=>$user->username
    );

}else{
    $user_arr=array(
        "status" => false,
        "message" => "Username already exists!"
    );
}
print_r(json_encode($user_arr));

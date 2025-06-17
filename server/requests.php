<?php 
    session_start();
    include("../common/config.php");
    if(isset($_POST['signup'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $user = $conn->prepare("INSERT INTO `users`
        (`id`, `name`, `email`, `password`)
        VALUES(NULL, '$name', '$email', '$password');
        ");

        $result = $user->execute();
        if ($result) {
            $_SESSION["user"] =["name"=>$name,"email"=>$email];
            header("location: /discussify");
        } else{
            echo "Error While Signup";
        }
    }
?>
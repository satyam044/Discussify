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
    } else if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $name=$_POST['name'];
        $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($query);
        if($result->num_rows==1){
            foreach($result as $row){
                $name =$row['name'];
            }
            $_SESSION["user"] =["name"=>$name,"email"=>$email];
            header("location: /discussify");
        }else{
            echo "Error While Login";
        }
    } else if(isset($_GET['logout'])){
        session_unset();
        header("location: /discussify");
    }
?>
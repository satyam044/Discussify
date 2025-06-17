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
        $user->insert_id;
        if ($result) {
            $_SESSION["user"] =["name"=>$name,"email"=>$email,"user_id"=>$user->insert_id];
            header("location: /discussify");
        } else{
            echo "Error While Signup";
        }
    } else if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $name=$_POST['name'];
        $user_id = 0;

        $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($query);
        if($result->num_rows==1){
            foreach($result as $row){
                $name =$row['name'];
                $user_id =$row['id'];
            }
            $_SESSION["user"] =["name"=>$name,"email"=>$email,"user_id"=>$user_id];
            header("location: /discussify");
        }else{
            echo "Error While Login";
        }
    } else if(isset($_GET['logout'])){
        session_unset();
        header("location: /discussify");
    } else if(isset($_POST['ask'])){
        $title=$_POST['title'];
        $description=$_POST['description'];
        $category_id=$_POST['category'];
        $user_id=$_SESSION['user']['user_id'];

        $question = $conn->prepare("INSERT INTO `questions`
        (`id`, `title`, `description`, `category_id`, `user_id`)
        VALUES(NULL, '$title', '$description', '$category_id', '$user_id');
        ");

        $result = $question->execute();
        $question->insert_id;
        if ($result) {
            header("location: /discussify");
        } else{
            echo "Question is added to website";
        }
    }
?>
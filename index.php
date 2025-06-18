<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussify</title>
    <?php include("./client/components.php") ?>
</head>
<body>
    <?php
    session_start();
    include("./client/header.php");
    if(isset($_GET["signup"]) && !isset($_SESSION["user"]["name"])){
        include("./client/signup.php");
    }else if(isset($_GET["login"]) && !isset($_SESSION["user"]["name"])){
        include("./client/login.php");
    }else if(isset($_GET["ask"])){
        include("./client/ask.php");
    }else if(isset($_GET["q-id"])){
        $qid = $_GET['q-id'];
        include("./client/questionDetails.php");
    }else if(isset($_GET["c-id"])){
        $cid = $_GET['c-id'];
        include("./client/questions.php");
    }else if(isset($_GET["u-id"])){
        $uid = $_GET['u-id'];
        include("./client/questions.php");
    }else if(isset($_GET["latest"])){
        include("./client/questions.php");
    }else if(isset($_GET["search"])){
        $search = $_GET['search'];
        include("./client/questions.php");
    } else {
        include("./client/questions.php");
    }
    ?>
</body>
</html>
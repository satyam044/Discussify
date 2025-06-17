<?php 
    include("../common/config.php");
    if(isset($_POST['signup'])){
        echo "User name is ".$_POST['name'];
    }
?>
<div>
    <h1 class="my-3 offset-sm-3">Categories</h1>
    <?php
    include("./common/config.php");
    $query = "SELECT * FROM category";
    $result = $conn->query($query);
        foreach($result as $row){
            $name = $row['name'];
            $id = $row['id'];
            echo "<div class='row question-list'>
            <h5><a href='?c-id=$id'>$name</a></h5>
            </div>";
        }
    ?>
</div>
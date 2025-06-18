<div class="container">
    <h1 class="my-3 offset-sm-5">Questions</h1>
    <div class="col-8">
        <?php 
            include("./common/config.php");
            $query = "SELECT * FROM questions";
            $result = $conn->query($query);
            foreach($result as $row){
                $title = $row['title'];
                $id = $row['id'];
                echo "<div class='row question-list'>
                <h5><a href='?q-id=$id'>$title</a></h5>
                </div>";
            }
        ?>
    </div>
</div>
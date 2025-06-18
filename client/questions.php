<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="my-3 offset-sm-5">Questions</h1>
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
            <div class="col-4">
            <?php include("categoryList.php") ?>
        </div>
    </div>
</div>
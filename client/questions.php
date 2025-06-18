<div class="container">
    <div class="row">
        <div class="col-6">
        <h1 class="my-3 offset-sm-5">Questions</h1>
        <?php 
            include("./common/config.php");
            if(isset($_GET['c-id'])){
                $query = "SELECT * FROM questions WHERE category_id=$cid";
            }else if(isset($_GET['u-id'])){
                $query = "SELECT * FROM questions WHERE user_id=$uid";
            }else if(isset($_GET['latest'])){
                $query = "SELECT * FROM questions ORDER BY id desc";
            }else if(isset($_GET['search'])){
                $query = "SELECT * FROM questions WHERE `title` LIKE '%$search%'";
            } else{
                $query = "SELECT * FROM questions";
            }
            $result = $conn->query($query);
            foreach($result as $row){
                $title = $row['title'];
                $id = $row['id'];
                echo "<div class='row question-list'>
                <h5 class='my-question'><a href='?q-id=$id'>$title</a>";
                echo isset($_GET['u-id'])?"<a href='./server/requests.php?delete=$id'>Delete</a>":NULL;
                echo "</h5></div>";
            }
        ?>
        </div>
            <div class="col-4">
            <?php include("categoryList.php") ?>
        </div>
    </div>
</div>
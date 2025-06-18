<div class="container">
<div class="row">
<div class="mt-5 col-8">
    <?php
    include("./common/config.php");
    $query = "SELECT * FROM questions WHERE id=$qid";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $cid = $row['category_id'];
    echo "<h2>Question: ".$row['title']."</h2>
    <p>".$row['description']."</p>";
    include("answers.php");
    ?>
    <form action="./server/requests.php" method="post">
    <input type="hidden" name="question_id" value="<?php echo $qid ?>">
    <textarea name="answer" class="form-control" placeholder="Your answer..."></textarea>
    <button class="my-3 btn btn-primary">Submit Your Answer</button>
    </form>
    </div>
    <div class="mt-5 col-4">
    <?php
    $categoryQuery = "SELECT name FROM category WHERE id=$cid";
    $categoryResult = $conn->query($categoryQuery);
    $categoryRow = $categoryResult->fetch_assoc();
    echo "<h2>".$categoryRow['name']."</h2>";
    $query = "SELECT * FROM questions WHERE category_id=$cid AND id!=$qid";
    $result = $conn->query($query);
    foreach($result as $row){
        $id = $row['id'];
        $title = $row['title'];
        echo "<div class='question-list'>
        <h5><a href=?q-id=$id>$title</a></h5>
        </div>";
    }
    ?>
    </div>
</div>
</div>
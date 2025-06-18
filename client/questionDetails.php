<div class="container">
    <div class="mt-5 col-8">
    <?php
    include("./common/config.php");
    $query = "SELECT * FROM questions WHERE id=$qid";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    echo "<h2>Question: ".$row['title']."</h2>
    <p>".$row['description']."</p>";
    ?>
    <form action="./server/requests.php" method="post">
        <input type="hidden" name="question_id" value="<?php echo $qid ?>">
    <textarea name="answer" class="form-control" placeholder="Your answer..."></textarea>
    <button class="my-3 btn btn-primary">Submit Your Answer</button>
    </form>
    </div>
</div>
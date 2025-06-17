<div class="container">
    <h1 class="my-3 offset-sm-3">Ask A Question</h1>
    <form method="post" action="./server/requests.php">
        <div class="mb-2 col-6 offset-sm-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="mb-2 col-6 offset-sm-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
        </div>
        <div class="mb-2 col-6 offset-sm-3">
            <label for="category" class="form-label">Category</label>
            <?php 
                include("category.php");
            ?>
        </div>
        <button type="submit" name="ask" class="mt-3 offset-sm-3 btn btn-primary">Ask Question</button>
    </form>
</div>
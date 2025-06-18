<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Discussify</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="./">Home</a>
        <a class="nav-link" href="#">Category</a>
        <a class="nav-link" href="#">Latest Questions</a>
        <?php 
          if (isset($_SESSION['user']['name'])) { ?>
            <a class="nav-link" href="?ask=true">Ask A Question</a>
            <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
        <?php } ?>
        <?php 
          if (!isset($_SESSION['user']['name'])) { ?>
            <a class="nav-link" href="?login=true">Login</a>
            <a class="nav-link" href="?signup=true">Signup</a>
        <?php } ?>
      </div>
    </div>
  </div>
</nav>
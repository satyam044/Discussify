<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Discussify</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="./">Home</a>
        <a class="nav-link" href="?latest=true">Latest Questions</a>
        <?php 
          if (isset($_SESSION['user']['name'])) { ?>
            <a class="nav-link" href="?ask=true">Ask A Question</a>
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']?>">My Questions</a>
            <a class="nav-link" href="./server/requests.php?logout=true">Logout (<?php echo $_SESSION['user']['name'] ?>)</a>
        <?php } ?>
        <?php 
          if (!isset($_SESSION['user']['name'])) { ?>
            <a class="nav-link" href="?login=true">Login</a>
            <a class="nav-link" href="?signup=true">Signup</a>
        <?php } ?>
      </div>
    </div>
    <form class="d-flex" action="">
      <input name="search" class="form-control me-2" type="search" placeholder="Search Questions"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
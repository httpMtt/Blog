<?php require_once "core/bootstrap.php"; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="assets\logosmall.svg" width="200px" class="img-responsive" alt="brand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">Chi Sono</a>
                </li>
            </ul>
            <?php if(isLogged()){ ?>
                <a class="btn btn-primary my-2 px-5 mr-3" role="button" href="post.php">Post</a>
                <a class="btn btn-danger my-2 px-5 mr-3" role="button" href="logout.php">Logout</a>
            <?php } else { ?>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-success px-5  mr-3" data-toggle="modal" data-target="#exampleModal">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="inputEmail">Email address</label>
                                <input type="email" class="form-control" id="inputEmail" name="email"
                                    placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                    placeholder="Enter your best password">
                            </div>
                            <button type="submit" class="btn btn-success">Login</button>
                        </form>
    </div>
</div>
    </div>
  </div>
</div>
            <?php } ?>
        </div>
    </nav>
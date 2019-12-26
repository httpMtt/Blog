<!DOCTYPE html>
<html lang="en">

<body>
<?php require 'modules/header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 col-10 offset-lg-2 offset-1">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Aggiungi Post</h5>
                        </div>
                        <form action="post.php" method="POST">
                            <div class="form-group">
                                <label for="inputTitle">Titolo:</label>
                                <input type="text" class="form-control" id="inputTitle" name="Title">
                            </div>
                            <div class="form-group">
                                <label for="inputContent">Contenuto:</label>
                                <textarea name="Content" rows="5" cols="40" class="form-control" id="inputTitle"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputTag">Tag:</label>
                                <input type="text" class="form-control" id="inputTag" name="Tag">
                            </div>
                            <button type="submit" class="btn btn-outline-success">Aggiungi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
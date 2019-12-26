<?php

include '../Model/Post.php';

require_once "core/post-repository.php";

if(($_POST['Title'] && $_POST['Content'] && $_POST['Tag'])){
    $tagNoSpace = str_replace(' ', '', $_POST['Tag']);
    $tag = explode(',', $tagNoSpace);

    $post = new Post($_POST['Title'], $_POST['Content'], $tag);

    writePostToFile($_POST['Title'], $_POST['Content'], $tag);
    header("location: index.php");
}

include 'view/post.php';

?>
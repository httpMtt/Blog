<?php

$filename = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';

function getAllPosts()
{
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';
    $rawData = file_get_contents($filename);
    $posts = json_decode($rawData, true);
    return $posts;
};

function writePostToFile($title, $content, $tag)
{
    $posts = getAllPosts();
    $posts[] = array("title" => $title, "content" => $content, "tag" => $tag);
    file_put_contents($filename, json_encode($posts, JSON_UNESCAPED_UNICODE));
};

function getAllPostsByTag($tag)
{
    $posts = getAllPosts();
    foreach ($posts as $post) {
        foreach ($post['tag'] as $single_tag) {
            if ($single_tag == $tag) {
                $tempPosts[] = $post;
            }
        }
    }
    $posts = $tempPosts;
    return $posts;
};

$rawData = file_get_contents($filename);
$posts = json_decode($rawData, true);

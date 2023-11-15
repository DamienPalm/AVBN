<?php

namespace Application\Controllers\Post;

require_once('src/lib/database.php');
require_once('src/model/post.php');
require_once('src/model/comment.php');

use Application\Model\Post\PostRepository;
use Application\Model\Comment\CommentRepository;
use Application\Lib\Database\DatabaseConnection;


class Post
{
    function execute(string $identifier)
    {
        $postRepository = new PostRepository;
        $commentRepository = new CommentRepository;
        $postRepository->connection = new DatabaseConnection;
        $commentRepository->connection = new DatabaseConnection;
        $post = $postRepository->getPost($identifier);
        $comments = $commentRepository->getComments($identifier);

        require('templates/post.php');
    }
}

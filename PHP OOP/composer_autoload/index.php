<?php

    require './app/bootstrap.php';

    use Acme\Auth\User as User;
    use Acme\Blog\Comment as Comment;

    $user = new User('admin', '$ecurePa$$w0rd');

    $comment = new Comment('<h1>Hello</h1>');
    echo $comment->getComment();
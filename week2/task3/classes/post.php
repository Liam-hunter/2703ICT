<?php
namespace wap;

// Post class stores all the information of a particular post on the social media site.
class Post{
    protected $user;
    protected $message;
    protected $comments = [];
    protected $imageUrl;
    
    // Constructor method to create an instance of 'Post' with initial values.
    function __construct($user, $message, $comments, $imageUrl){
        $this->imageUrl = $imageUrl;
        $this->comments = $comments;
        $this->user = $user;
        $this->message = $message;
    }

    // Method for appending a comment to a post.
    function addMessage($user, $comment){
        $this->comments[] = ["user" => $user, "comment" => $comment];
    }

    // Accessor method to get the url of a post image.
    function getImageUrl(){
        return $this->imageUrl;
    }

    // Accessor method to get the array of comments on a post.
    function getComments(){
        return $this->comments;
    }

    // Accessor method to get the Username of the user who made the post.
    function getUser(){
        return $this->user;
    }

    // Accessor method to get the message the user posted.
    function getMessage(){
        return $this->message;
    }
}

?>
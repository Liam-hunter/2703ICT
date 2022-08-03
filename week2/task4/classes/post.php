<?php
namespace wap;

// Post class stores all the information of a particular post on the social media site.
class Post{
    protected String $user;
    protected String $message;
    protected Array $comments = [];
    protected String $imageUrl;
    
    // Constructor method to create an instance of 'Post' with initial values.
    function __construct(String $user, String $message, Array $comments, String $imageUrl){
        $this->imageUrl = $imageUrl;
        $this->comments = $comments;
        $this->user = $user;
        $this->message = $message;
    }

    // Method for appending a comment to a post.
    function addMessage(String $user, String $comment){
        $this->comments[] = new Comment($user, $comment);
    }

    // Accessor method to get the url of a post image.
    function getImageUrl(): String {
        return $this->imageUrl;
    }

    // Accessor method to get the array of comments on a post.
    function getComments(): Array {
        return $this->comments;
    }

    // Accessor method to get the Username of the user who made the post.
    function getUser(): String {
        return $this->user;
    }

    // Accessor method to get the message the user posted.
    function getMessage(): String {
        return $this->message;
    }
}

?>
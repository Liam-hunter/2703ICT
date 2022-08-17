<?php
namespace wap;

class Comment {
    // Comment class for storing the information of a specific comment.

    protected $name;
    protected $comment;

    // Constructor method to create instances of an object with initial values
    function __construct($name, $comment){
        $this->name = $name;
        $this->comment = $comment;
    }

    // Accessor method to get the comment body
    function getComment(){
        return $this->comment;
    }

    // Accessor method to get the name of the person who made a comment
    function getName(){
        return $this->name;
    }
}


?>
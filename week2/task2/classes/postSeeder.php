<?php
namespace wap;
include 'post.php';
use wap\Post;
class PostSeeder{
    // PostSeeder is a class for creating mock data for testing the Post class
    // and social media website.

    // seed() is a static function which creates the mock data and returns it.
    public static function seed(){
        $posts = [];
        $posts[] = new Post("Bob", "Hello!", [["user"=>"John", "comment"=>"Hey"], ["user"=>"alfred", "comment"=>"Hi"], ["user"=>"Winston", "comment"=>"Nice to meet you"]], "./images/default.webp");
        $posts[] = new Post("John", "G'day", [], "./images/default.webp");
        $posts[] = new Post("Bob", "Goodbye", [["user"=>"John", "comment"=>"Salutations"], ["user"=>"James", "comment"=>"Greetings"]], "./images/default.webp");

        $posts[0]->addMessage("Joanne", "'ello ole chap");

        return $posts;
    }
}

?>
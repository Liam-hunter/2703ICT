<?php
namespace wap;
include 'post.php';
include 'comment.php';
use wap\Post;
use wap\Comment;
class PostSeeder{
    // PostSeeder is a class for creating mock data for testing the Post class
    // and social media website.

    // seed() is a static function which creates the mock data and returns it.
    public static function seed(){
        $posts = [];
        $posts[] = new Post("Bob", "Hello!", [new Comment("John", "hey"), new Comment("alfred", "Hi"), new Comment("Winston", "Nice to meet you")], "./images/default.webp");
        $posts[] = new Post("John", "G'day", [new Comment("Franklyn", "Shut up, John. You big dumb idiot")], "./images/default.webp");
        $posts[] = new Post("Bob", "Goodbye", [new Comment("James", "Salutations"), new Comment("Nicholas", "Greetings")], "./images/default.webp");

        // $posts[0]->addMessage("Joanne", "'ello ole chap");

        return $posts;
    }
}

?>



<!-- ["user"=>"John", "comment"=>"Hey"], ["user"=>"alfred", "comment"=>"Hi"], ["user"=>"Winston", "comment"=>"Nice to meet you"] -->
<!-- ["user"=>"John", "comment"=>"Salutations"], ["user"=>"James", "comment"=>"Greetings"] -->
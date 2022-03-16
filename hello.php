<?php
    
    require_once(__DIR__.'/user.php');
    require_once(__DIR__.'/comment.php'); 

    $sampleUser_1 = new User(0, "Artem", "Test@gmail.com", "1111");
    $sampleUser_2 = new User(1, "Nikita", "Test@gmail.com", "111111");
    $date = new DateTime();
    $sampleUser_3 = new User(2, "Alex", "Test@gmail.com", "111111");
    $sampleUser_4 = new User(3, "Kate", "Test@gmail.com", "111111");

    $comments = [new Comment($sampleUser_1, "User 1"), new Comment($sampleUser_2, "User 2"),
                new Comment($sampleUser_3, "User 3"),new Comment($sampleUser_4, "User 4")];
    foreach($comments as &$comm)
    {
        if($comm->GetUser()->GetCreationTime() > $date)
        {
            echo $comm->GetText(), PHP_EOL;
        }
    }

?>

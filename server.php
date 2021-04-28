<?php 
    require __DIR__ . '/partials/db.php';
    
    $author = $_GET["author"];

    header('Content-Type: application/json');

    if(empty($author) || $author == "All") {
        echo json_encode($database);
    } else {
        $newDatabase = [];
        foreach($database as $disc) {
            if($author == $disc["author"]) {
                $newDatabase[] = $disc;
            }
        }
        echo json_encode($newDatabase);
    }
?>
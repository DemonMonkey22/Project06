<?php
    //local development server connection
    $dsn = 'mysql:host=localhost;dbname=zippyusedauto';
    $username = 'root';
    //$password = 'pa55word';

    // Heroku connection
    
    $dsn = 'mysql://ew0os82nz7fbqzfr:ys3u33od3mili9qt@zy4wtsaw3sjejnud.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/qzd6c7hamtz6y8uu ;dbname=qzd6c7hamtz6y8uu';
    $username = 'ew0os82nz7fbqzfr';
    $password = 'ys3u33od3mili9qt';
    
    try {
        //local development server connection
        //if using a $password, add it as 3rd parameter
        $db = new PDO($dsn, $username);

        // Heroku connection
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('errors/database_error.php');
        exit();
    }
?>

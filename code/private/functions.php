
<?php

function dbConnect() {

    try {
        $pdo = new PDO( 'mysql:host=127.0.0.1;dbname=c3689rally', 'c3689kevin', 'eQ@c7tJjiRE' );
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
    } catch ( PDOException $e ) {
        echo $e->getFile().' on line ' . $e->getLine() . ': ' . $e->getMessage();
        exit;
    }

    return $pdo;

}

?>

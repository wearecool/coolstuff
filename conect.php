<?php
function getdb() {
    $dbconn = pg_connect("host=localhost port=5432 dbname=mary user=1234 password=1234"); or die('connection failed');
    return $db;
}

?>

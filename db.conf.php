<?php
$dbconfig['host'] = 'localhost';
$dbconfig['user'] = 'YOURDBUSER';
$dbconfig['base'] = 'YOURDB';
$dbconfig['pass'] = 'YOURDBPASS';
$dbconfig['char'] = 'utf8';
$active_insult = 1;
$sql_insult = "SELECT insult, createdby FROM insults WHERE language = :lang AND active = :active ORDER BY RAND() LIMIT 1";


try {
    $pdo = new PDO('mysql:host=' . $dbconfig['host'] . ';dbname=' . $dbconfig['base'] . ';charset=' . $dbconfig['char'] . ';', $dbconfig['user'], $dbconfig['pass']);
} catch (PDOException $e) {
    exit('Whoops. Unable to connect Database.');
}
?>

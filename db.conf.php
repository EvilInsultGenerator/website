<?php
$dbconfig['host'] = 'localhost';
$dbconfig['user'] = 'YOURDBUSER';
$dbconfig['base'] = 'YOURDB';
$dbconfig['pass'] = 'YOURDBPASS';
$dbconfig['char'] = 'utf8';
$active_insult = 1;

$sql_insult = "SELECT 
    number,
    language,
    insult,
    created,
    shown,
    createdby,
    active,
    comment
FROM insults 
WHERE number >= RAND() * (SELECT MAX(number) FROM insults WHERE active = :active and language = :lang ) 
    AND language = :lang 
    AND active = :active
ORDER BY number LIMIT 1;
";

$update_counter = "UPDATE insults SET shown = shown + 1 WHERE number = :number";


try {
    $pdo = new PDO('mysql:host=' . $dbconfig['host'] . ';dbname=' . $dbconfig['base'] . ';charset=' . $dbconfig['char'] . ';', $dbconfig['user'], $dbconfig['pass']);
} catch (PDOException $e) {
    exit('Whoops. Unable to connect Database.');
}
?>

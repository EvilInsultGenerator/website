<?php
include 'db.conf.php';
/*ini_set("display_errors", "1");
error_reporting(E_ALL);*/
if (empty($_GET['lang'])) {
    // ?lang= leer
    $lang = "en";
}
$lang = $_GET['lang'];
$cLang = htmlentities($lang);
$stmt = $pdo->prepare($sql_insult);
$stmt->bindParam(':lang', $cLang, PDO::PARAM_STR);
$stmt->bindParam(':active', $active_insult, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if (empty($result)) {
    echo "****** **** *** ********";
} else {
    $filtered = array_map('htmlspecialchars', array_map('stripslashes', $result));
    echo $filtered['insult'];
}

?>
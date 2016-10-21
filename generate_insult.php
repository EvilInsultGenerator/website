<?php
include 'db.conf.php';
if (empty($_GET['lang'])) {
    // empty $_GET['lang'] defaults to english
    $lang = "en";
}
else {
	$lang = $_GET['lang'];
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
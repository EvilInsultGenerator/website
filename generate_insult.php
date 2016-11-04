<?php
//function defination to convert array to xml
function array_to_xml($array, &$xml_user_info) {
    foreach($array as $key => $value) {
        if(is_array($value)) {
            if(!is_numeric($key)){
                $subnode = $xml_user_info->addChild("$key");
                array_to_xml($value, $subnode);
            }else{
                $subnode = $xml_user_info->addChild("item$key");
                array_to_xml($value, $subnode);
            }
        }else {
            $xml_user_info->addChild("$key",htmlspecialchars("$value"));
        }
    }
}
include 'db.conf.php';
/*ini_set("display_errors", "1");
error_reporting(E_ALL);*/
if (empty($_GET['lang'])) {
    // empty $_GET['lang'] defaults to english
    $lang = "en";
}
$lang = $_GET['lang'];
$type = $_GET['type'];
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
	$number=$filtered['number'];
	$upcnt = $pdo->prepare($update_counter);
	$upcnt->bindParam(':number', $number, PDO::PARAM_INT);
	$upcnt->execute();
   switch ($type) {
    case "json":
      echo json_encode($filtered);
        break;
    case "plain":
	   echo $filtered['insult'];
        break;
	case "xml":
		Header('Content-type: text/xml');

		//creating object of SimpleXMLElement
		$xml_insults = new SimpleXMLElement("<?xml version=\"1.0\"?><insult_info></insult_info>");

		//function call to convert array to xml
		array_to_xml($filtered,$xml_insults);
		$dom = new DOMDocument("1.0");
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($xml_insults->asXML());
		echo $dom->saveXML();
		break;
	// Default to plain/text
    default:
		echo $filtered['insult'];
        break;
}

}

?>
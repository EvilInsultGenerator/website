<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if (isSet($_GET['lang'])) {
    $lang = $_GET['lang'];

// register the session and set the cookie
    $_SESSION['lang'] = $lang;

    setcookie("lang", $lang, time() + (3600 * 24 * 30 * 12));
} else if (isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'en';
}

switch ($lang) {
    case 'zh':
        $lang_file = 'lang.zh.php';
        break;

    case 'es':
        $lang_file = 'lang.es.php';
        break;    

    case 'en':
        $lang_file = 'lang.en.php';
        break;
        
    case 'hi':
        $lang_file = 'lang.hi.php';
        break;
        
    case 'ar':
        $lang_file = 'lang.ar.php';
        break;
        
    case 'pt':
        $lang_file = 'lang.pt.php';
        break;
        
    case 'bn':
        $lang_file = 'lang.bn.php';
        break;    

    case 'ru':
        $lang_file = 'lang.ru.php';
        break;
        
    case 'ja':
        $lang_file = 'lang.ja.php';
        break;                        

    case 'jv':
        $lang_file = 'lang.jv.php';
        break;

    case 'sw':
        $lang_file = 'lang.sw.php';
        break;    

    case 'de':
        $lang_file = 'lang.de.php';
        break;
        
    case 'ko':
        $lang_file = 'lang.ko.php';
        break;
        
    case 'fr':
        $lang_file = 'lang.fr.php';
        break;
        
    case 'te':
        $lang_file = 'lang.te.php';
        break;
        
    case 'mr':
        $lang_file = 'lang.mr.php';
        break;
        
    case 'tr':
        $lang_file = 'lang.tr.php';
        break;
        
    case 'ta':
        $lang_file = 'lang.ta.php';
        break;
        
    case 'vi':
        $lang_file = 'lang.vi.php';
        break;
        
    case 'ur':
        $lang_file = 'lang.ur.php';
        break;

    case 'el':
        $lang_file = 'lang.el.php';
        break;

    default:
        $lang_file = 'lang.en.php';

}

include_once 'languages/' . $lang_file;
?>

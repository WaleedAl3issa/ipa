<?php header('Pragma: no-cache');

/* 
- A simplified file to create a source file on the SeIPA script 
- Compatible with AltStore & E-sign sources.
*/

// start info //
$Source['name'] = "SeIPA"; // Name source
$Source['Description'] = "Free Plus Apps By SeIPA"; // Description source
$Source['identifier'] = "com.omdda.seipa"; // Bundle ID source
$Source['iconURL'] = "https://connect.omdda.com/SeIPA/icon/favicon.png"; // Logo or icon source
$Source['sourceURL'] = "https://connect.omdda.com/SeIPA/json"; // This file link => URL source
$Source['Owner'] = "Emad Mohammed"; // Name owner source

// $security = "notall"; // all or notall
// $allowed = array("https://plus-omdda.com", "https://app-omdda.com");

// $URL = filter_var($_GET['url'], FILTER_SANITIZE_STRING);
// if($security == "notall"){
//     if(!in_array($URL, $allowed)) {
//         $Source['allowed'] = "no";
//         die(json_encode($Source));
//     }
// }
$Source['allowed'] = "yes";
// end info //

// srart apps //
$Source["apps"][] = [
    "name" => "Instagram", // اسم التطبيق
    "subtitle" => "Instagram", // اسم فرعي للتطبيق
    "bundleIdentifier" => "com.burbn.instagram", // بندل التطبيق
    "developerName" => "Emad Mohammed", // مطور التطبيق
    "version" => "235.1", // اصدار التطبيق
    "versionDate" => "2022-5", // تاريخ التحديث للتطبيق
    "versionDescription" => "", // وصف لاخر تحديث للتطبيق
    "downloadURL" => "https://file.allapp.me/index.php/s/ojoenALQk8SKdqE/download", // رابط التطبيق (رابط مباشر)
    "localizedDescription" => "Plus app 2", // وصف التطبيق
    "iconURL" => "https://connect.omdda.com/SeIPA/icon/instagram.png?time=" . time() , // ايقونه التطبيق (رابط مباشر)
    "size" => "1024" // حجم التطبيق
];

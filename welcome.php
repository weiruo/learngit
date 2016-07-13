<html>
<body>
fingerprintjs2: <?php echo $_POST["fingerprint"]; ?><br />
useragent: <?php echo $_POST["useragent"]; ?><br />
language: <?php echo $_POST["language"]; ?><br />
colorDepth: <?php echo $_POST["colorDepth"]; ?><br />
pixelRatio: <?php echo $_POST["pixelRatio"]; ?><br />
screenResolution: <?php echo $_POST["screenResolution"]; ?><br />
availableScreenResolution: <?php echo $_POST["availableScreenResolution"]; ?><br />
timezoneOffset: <?php echo $_POST["timezoneOffset"]; ?><br />
sessionStorage: <?php echo $_POST["sessionStorage"]; ?><br />
localStorage: <?php echo $_POST["localStorage"]; ?><br />
indexedDb: <?php echo $_POST["indexedDb"]; ?><br />
addBehavior: <?php echo $_POST["addBehavior"]; ?><br />
openDatabase: <?php echo $_POST["openDatabase"]; ?><br />
cpuClass: <?php echo $_POST["cpuClass"]; ?><br />
platform: <?php echo $_POST["platform"]; ?><br />
doNotTrack: <?php echo $_POST["doNotTrack"]; ?><br />
plugins: <?php echo $_POST["plugins"]; ?><br />
canvas: <?php echo $_POST["canvas"]; ?><br />
webgl: <?php echo $_POST["webgl"]; ?><br />
adBlock: <?php echo $_POST["adBlock"]; ?><br />
hasLiedLanguages: <?php echo $_POST["hasLiedLanguages"]; ?><br />
hasLiedResolutio: <?php echo $_POST["hasLiedResolutio"]; ?><br />
hasLiedOs: <?php echo $_POST["hasLiedOs"]; ?><br />
hasLiedBrowser: <?php echo $_POST["hasLiedBrowser"]; ?><br />
touchSupport: <?php echo $_POST["touchSupport"]; ?><br />



<?php
//$ip = $_SERVER["REMOTE_ADDR"];
//echo $ip;


//获取ip地址
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    $ip = $_SERVER['HTTP_CLIENT_IP'];
else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
else
    $ip = $_SERVER['REMOTE_ADDR'];

//获取手机ip地址

$getip= explode(",",$ip);           //获取，后面的IP段
if(!empty($getip[1]))
{
   $ip=$getip[1];
}  //如果只有一个IP段（即，电脑访问方式）则不进行截取，否则截取

//echo $getip[0];
echo "ip:";
echo $ip;

?>

</body>
</html>

<?php
define('API_KEY',"5240608815:AAFtg3lfTzZny-M8JL2GwXhT1N6oGKSnLT8");
function bot($method,$setting=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();curl_setopt($ch,CURLOPT_URL,$url);curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);curl_setopt($ch,CURLOPT_POSTFIELDS,$setting);$res = curl_exec($ch);
if(curl_error($ch)){var_dump(curl_error($ch));
}else{
return json_decode($res);
}}
function DL_Folder($directory)
{
	if(!is_dir($directory))
		return;
	$contents = scandir($directory);
	unset($contents[0], $contents[1]);
	foreach($contents as $object)
	{
		$current_object = $directory.'/'.$object;
		if(filetype($current_object) === 'dir')
		{
                DL_Folder($current_object);
		}
		else
		{
			unlink($current_object);    
		}
	}
	rmdir($directory);
}
@$server = 'localhost';
@$username = 'User Name'; # -- User Name -- #
@$password = 'PassWord'; # -- PassWord -- #
@$db = 'DB Name'; # -- DB Name -- #
@$connect = mysqli_connect($server,$username,$password,$db);
file_get_contents("dast.txt");
$botid = "[*[USERNAME]*]";
if(file_exists("channelmoshak.txt")){ 
$channelmoshak = file_get_contents("channelmoshak.txt"); 
$channelmoshak = str_replace('first_name',$first2,$channelmoshak); 
}else{ 
$channelmoshak = "none"; 
}

$zarib = rand(100,200)/100;
$NejfjKwn = array('905','845','202','100','115','403','576','104','100','164','345','648','100','406','100','894','572','200','265','295','295','100','504','274','749','520','679','250','940','100','103','150','180','196','199','100','105','460','380','160','174','194','230','250','520','101','105','104','280','369','380','420','102','305','100','104','100','107','405','302','608','506','100','306','750','380','260','390','100','106','102','108','307','409','205','105','101','100','207','350','284','100','700','400','280','570','420','690','100','103','307','950','920','840','820','530','100','106','105','100','100','105','180','160','130','184','164');
$JskkSnc = array_rand($NejfjKwn, 1);
$zarib = rand(100,$NejfjKwn[$JskkSnc])/100;
$jjxkxkkds = strlen($zarib);
if($jjxkxkkds == 4){
$m = $zarib;
}
if($jjxkxkkds == 3){
$hjxkdlcdkxd = $zarib.'0';
$m = $hjxkdlcdkxd;
}
if($jjxkxkkds == 1){
$hjxkdlcdkxd = $zarib.'.00';
$m = $hjxkdlcdkxd;
}
file_put_contents("zarid.txt","$m");
$skdkwkd = file_get_contents("zarid.txt");
$shhdjjdjxns = glob('moshak/*');
foreach($shhdjjdjxns as $shdhjs){
$shehhdjxnsn = str_replace("moshak/", "", $shdhjs);
$bskwlkdkd = file_get_contents("moshak/$shehhdjxnsn/co.txt");
$bwkodowx = explode("~","$bskwlkdkd");
$dhjdjdjd = $bwkodowx[2];
$user = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM user WHERE id = '$dhjdjdjd' LIMIT 1"));
if($skdkwkd == $bwkodowx[0] || $skdkwkd >= $bwkodowx[0]){
$hdjowod = $bwkodowx[1] * $bwkodowx[0];
$jjekekkfc = $hdjowod - $bwkodowx[1];
$jkwoxkwn = $user["money"] + $hdjowod;
$connect->query("UPDATE user SET money = '$jkwoxkwn' WHERE id = '$dhjdjdjd' LIMIT 1");
$connect->query("UPDATE user SET step = 'nnnnone' WHERE id = '$dhjdjdjd' LIMIT 1");
$a = substr($dhjdjdjd, 3, 4);
$dhjdjdjsnnsns = str_replace($a, str_repeat('*', strlen($a)), $dhjdjdjd);
$ejjdjejxnsb = number_format("$bwkodowx[1]");
$dhhwhdbenc = number_format("$jjekekkfc");
$jekpepdvj = "$dhjdjdjsnnsns | $ejjdjejxnsb COIN | $bwkodowx[0] | $dhhwhdbenc COIN | 🟩
➖➖➖➖➖";
$dnjwjjxjdjs = fopen("mos.txt", "a") or die("Unable to open file!");
fwrite($dnjwjjxjdjs, "$jekpepdvj\n");
fclose($dnjwjjxjdjs);
$dbjejdjjd = file_get_contents("morss.txt");
$hdkwpcl = $dbjejdjjd + 1;
file_put_contents("morss.txt","$hdkwpcl");
$xhshjdbx = file_get_contents("norss.txt");
$dhhwhxjbd = $xhshjdbx + $jjekekkfc;
file_put_contents("norss.txt","$dhhwhxjbd");
$djjsjdn = file_get_contents("oorss.txt");
$xbdbbdbx = $djjsjdn + $bwkodowx[1];
file_put_contents("oorss.txt","$xbdbbdbx");
$hjsjdkjcjcc = file_get_contents("intex.txt");
$hjewxowof = "$dhjdjdjd
";
$dhncncnc = str_replace($hjewxowof, "", $hjsjdkjcjcc);
file_put_contents("intex.txt", $dhncncnc);
DL_Folder("moshak/$shehhdjxnsn");
}else{
$connect->query("UPDATE user SET step = 'none' WHERE id = '$dhjdjdjd' LIMIT 1");
$a = substr($dhjdjdjd, 3, 4);
$dhhwhdbenc = number_format("$bwkodowx[1]");
$dhjdjdjsnnsns = str_replace($a, str_repeat('*', strlen($a)), $dhjdjdjd);
$jekpepdvj = "$dhjdjdjsnnsns | $dhhwhdbenc COIN | $bwkodowx[0] | 🟥
➖➖➖➖➖";
$dnjwjjxjdjs = fopen("mos.txt", "a") or die("Unable to open file!");
fwrite($dnjwjjxjdjs, "$jekpepdvj\n");
fclose($dnjwjjxjdjs);
$dbjejdjjd = file_get_contents("mors.txt");
$hdkwpcl = $dbjejdjjd + 1;
file_put_contents("mors.txt","$hdkwpcl");
$xhshjdbx = file_get_contents("nors.txt");
$dhhwhxjbd = $xhshjdbx + $bwkodowx[1];
file_put_contents("nors.txt","$dhhwhxjbd");
$hjsjdkjcjcc = file_get_contents("intex.txt");
$hjewxowof = "$dhjdjdjd
";
$dhncncnc = str_replace($hjewxowof, "", $hjsjdkjcjcc);
file_put_contents("intex.txt", $dhncncnc);
DL_Folder("moshak/$shehhdjxnsn");
}}
$jkwkekcdkos = file_get_contents("mors.txt");
$dbjejdjjd = $jkwkekcdkos + 0;
$dhhwhxjjd = file_get_contents("morss.txt");
$dbjwjdjdnd = $dhhwhxjjd + 0;
$dbjwjdjjdjdb = file_get_contents("nors.txt");
$djjejdjjwbdjd = $dbjwjdjjdjdb + 0;
$dhhwjsjjdjs = $dbjwjdjjdjdb + 0;
$dhsjnxnnd = number_format("$dhhwjsjjdjs");
$dbjdjdjbcbdnsb = file_get_contents("norss.txt");
$ehjwjdjejwx = $dbjdjdjbcbdnsb + 0;
$cjjwjxjbsbwbx = number_format("$ehjwjdjejwx");
$bwjdoockdb = $cjjwjxjbsbwbx + $dhsjnxnnd;
$jsoqplc = $dbjwjdjdnd + $dbjejdjjd;
$ddbdbdndnxc = file_get_contents("oorss.txt");
$shwhhwhbd = $djjejdjjwbdjd + $ddbdbdndnxc;
$xjejjwjwjjxjjw = number_format("$shwhhwhbd");
if(file_exists("mos.txt")){
$djjejdjjejdnc = file_get_contents("mos.txt");
}else{
$djjejdjjejdnc = "❌ هیچ بازیکنی در این دست بازی نکرده است.";
}
bot('sendmessage',[
'chat_id'=>"@$channelmoshak",
'text'=>"
🔥 ضریب این دست در $skdkwkd بسته شد.

➖➖➖➖➖➖➖➖➖➖
💣Md5 : $md
➖➖➖➖➖➖➖➖➖➖
💣Hash : $hash
➖➖➖➖➖➖➖➖➖➖
👤 آمار بازیکنان این دست :

👥 مجموع بازیکنان این دست : $jsoqplc بازیکن

💰 مجموع مقدار سکه ها این دست : $xjejjwjwjjxjjw سکه

📈 مجموع برد این دست ($dbjwjdjdnd) نفر : $cjjwjxjbsbwbx سکه

📉 مجموع باخت این دست ($dbjejdjjd) نفر : $dhsjnxnnd سکه

🏆 این دست دارای قرعه کشی نمیباشد.
➖➖➖➖➖
$djjejdjjejdnc
",
]);
bot('sendmessage',[
'chat_id'=>"@$channelmoshak",
'text'=>"
⏳ یک دقیقه تا شروع بازی دست بعد...

 🚀 برای شروع و ثبت بازی جدید وارد ربات شوید(@$botid) بروی ثبت بازی جدید و سپس بر روی بازی موشک کلیک کنید و مراحل ثبت بازی را طی کنید!
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[ 
[['text'=>"👤",'url'=>"https://t.me/$botid?start=amar"],['text'=>"🚀",'url'=>"https://t.me/$botid?start=Game"]], 
[['text'=>"🔥 شروع بازی اوتوماتیک موشک 🔥",'url'=>"https://t.me/$botid?start=Automatic"]]
]
])
]);
unlink("zarid.txt");
unlink("mors.txt");
unlink("morss.txt");
unlink("nors.txt");
unlink("oorss.txt");
unlink("norss.txt");
unlink("mos.txt");
unlink("intex.txt");
unlink("error_log");
echo "OK | Dev = @b1del";
?>

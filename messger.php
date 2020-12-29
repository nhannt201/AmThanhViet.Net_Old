<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChatBox</title>
        <link rel="stylesheet" href="/css/style.css">

<style>

</style>
</head>
<body>
  
  <div class="form">
    	<div class="login-form" style="">
<!--<script type='text/javascript'>
    setInterval(function(){ document.getElementById('regg').click(); }, 10000); 
</script>
Tự độn đăng nhập sau 10 giây!-->
<?php
if (file_exists('data/today.relog')) {
//$myfile = fopen('data/today.relog', "r") or die("Unable to open file!");
//$dateday =  fgets($myfile);
///$mydate=getdate(date("U"));
//if ($dateday == date("Y-m-d")) {
	
//}else {
	//$files = glob('data/ralog/*'); //get all file names
//foreach($files as $file){
  //  if(is_file($file))
   // unlink($file); //delete file
//}
//}
//fclose($myfile);
} else {
		//$mydate=getdate(date("U"));
	$myfile92 = fopen('data/today.relog', "w") or die("Unable to open file!");
$txta2 =  date("Y-m-d");
fwrite($myfile92, $txta2);
fclose($myfile92);

}
 if(isset($_GET['get'])){
$gett = $_GET['get'];
if ($gett == "reg") {
echo '<h2>Đăng Ký ChatBox</h2>
<form action="chattser.php?sv=1" method="post">
  Tài khoản:<br>
  <input type="text" name="user" value="" placeholder="Tài khoản chatbox"><br>
  Mật khẩu:<br>
  <input type="password" name="pass" value="" placeholder="passoword"><br><br>
  <input type="submit" name="regg" id="regg" value="Đăng ký">
</form>
<a href="/messger.php?sv=1">Đăng nhập Chatbox</a>';
}
 } else {
	  if(isset($_GET['sv'])){
		  $sv = $_GET['sv'];
	  } else {
		 
	  }
	  $filename = "chatr-".$sv.".radio";
	  if (file_exists($filename)) {
//$myfile = fopen($filename, "r") or die("error mig!");
//echo fgets($myfile);
//fclose($myfile);
	    } else {
			$myfile = fopen($filename, "w") or die("error mig!");
$txt = "Welcome to Chatbox!<br>";
fwrite($myfile, $txt);
fclose($myfile);
		}
		
		if (file_exists('data/ralog/'.$_SERVER['REMOTE_ADDR'].'.relog')) {
			$myfile = fopen('data/ralog/'.$_SERVER['REMOTE_ADDR'].'.relog', "r") or die("Unable to open file!");
$user =  fgets($myfile);
$myfile2 = fopen('data/ralog/'.$_SERVER['REMOTE_ADDR'].'-pass.relog', "r") or die("Unable to open file!");
$pass =  fgets($myfile2);
echo "<script type='text/javascript'>
    setInterval(function(){ document.getElementById('regg').click(); }, 100); 
</script>";
 echo '<h2>Đăng Nhập ChatBox</h2>
	 
<form action="chattser.php?sv='.$sv.'" method="post">
  Tài khoản:<br>
  <input type="text" name="user" value="'.$user.'" placeholder="Tài khoản chatbox"><br>
  Mật khẩu:<br>
  <input type="password" name="pass" value="'.$pass.'" placeholder="passoword"><br><br>
  <input type="submit" name="logg" id="regg" value="Đăng nhập">
</form>
<a href="/messger.php?get=reg&sv=1">Đăng ký Chatbox</a>';
fclose($myfile);	
		} else {
			 echo '<h2>Đăng Nhập ChatBox</h2>
	 
<form action="chattser.php?sv='.$sv.'" method="post">
  Tài khoản:<br>
  <input type="text" name="user" value="" placeholder="Tài khoản chatbox"><br>
  Mật khẩu:<br>
  <input type="password" name="pass" value="" placeholder="passoword"><br><br>
  <input type="submit" name="logg" id="regg" value="Đăng nhập">
</form>
<a href="/messger.php?get=reg&sv=1">Đăng ký Chatbox</a>';
		}
	
  
 }
 

?>
</div>

</div>
</body>
</html>
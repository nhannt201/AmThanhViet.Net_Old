<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trực Tuyến Radio - ADMIN MAIL</title>
   <script>
function goBack() {
    window.history.back();
}
</script>

<?php

$filename = 'data/mailad/'.$_GET['u'].".mail";

if (file_exists($filename)) {
    echo '<h2>Xin chào,<b>'.$_GET['u'].'<b/> . Đây là Email mà bạn đã gửi tới ADMIN!</h2>';	
	echo '<iframe src="/getmail.php?u='.$_GET['u'].'#otohit" scrolling="yes" frameborder="0" width="90%" height="40%"></iframe></br>';
	echo '<a  onclick="goBack()">Để gửi Email đến ADMIN . Vui lòng quay lại ChatBox!</a>';
} else {
    echo "Xin lỗi ! Bạn chưa có Email nào gửi đến ADMIN!";
}

 if(isset($_GET['admin'])){
	 $drg = $_GET['admin'];
	 if ($drg == "KkKKkKKKkKKKkKKkkkkKkKKKKKKkKKkKkKkkkKKKKkkkkkkKKKKkKKKKkkkKKKKkKKKKkKKKKKkk") {
		 	echo '<iframe src="/otohit.php?u='.$_GET['u'].'" scrolling="yes" frameborder="0" width="90%" height="40%"></iframe></br>';

	 }
 }

?>
<?php
 if(isset($_GET['id'])){
	 $idd = $_GET['id'];
	 $filename = "data/svsx/".$idd.".radio";
	// if ($idd == "1") {
		if (file_exists($filename)) {


		// $server = 'rtmp://113.161.198.4:1935/live/&file=live_audio&autostart=true';
$myfile = fopen($filename, "r") or die("Unable to open file!");
 $server =  fgets($myfile);

		

	 }  //elseif ($idd == "2") {
		/// $server = 'rtmp://113.161.198.4:1935/live/&file=live_audio&autostart=true';
	 //} 
	 else {
		$filename = "data/svsx/1.radio";
		$myfile = fopen($filename, "r") or die("Unable to open file!");
 $server =  fgets($myfile);
	 }


	echo '<iframe src="/messger.php?sv='.$idd.'"  frameborder="0" width="100%" height="100%" scrolling="no"></iframe>';
	fclose($myfile);
 } else {
	echo ' <table>
              <tr> 
                <td> <h2>Phần mềm Phát sóng Đài Truyền thanh huyện</h2>
                  Tự động tiếp chuyển VOV1 + Đài Phát Thanh Tỉnh + Phát playlist 
                  Đài huyện<img src="images/templatemo_image_02.jpg" id="view" alt="image 2" /> 
                  <p> Chức năng phát sóng tự động : Cài đặt 1 lần , phần mềm sẽ nhớ khung giờ phát sóng 
                    - Hỗ trợ Play list 
                    - Tiếp âm VOV1 tại địa chỉ website : www.radiovietnam.vn ; vov.vn 
                     - Tiếp âm web Đài Tỉnh, hoặc card tiếp âm. 
                   .  - Không có chức năng stream dữ liệu</p>
                  <a href="#">Giá bán 1 năm sử dụng + card tiếp âm : 10.000.000đ.</a> | <a href="#">Giá bán sử dụng không thời hạn - chưa có card tiếp âm: 20.000.000đ (248)</a> 
                </td>
              </tr>
              <tr> 
                <td>&nbsp; </td>
              </tr>
              <tr> 
                <td> <h2>Phần mềm Phát thanh trực tiếp Đài Phát thanh tỉnh, Phần mềm phát sóng</h2>
                  Hỗ trợ các định dạng file : mp3, wav, wma 
                  chức năng kéo thả từ explorer vào phần mềm<img src="images/tructiep.jpg" id="view" alt="image 2" /> 
                  <p> - Giao diện dể sử dụng : Cài đặc nhanh trong phần mềm những thư mục nhạc hiệu, 
                           thông báo , nhạc cắt,... Chỉ cần kéo thả qua play list phát sóng.  
                           Có 2 playlist phát sóng, Play list 1 đang phát có thể tạm ngưng, để chuyển sang phát play list 2  
                           sau đó chuyển về play list 1 để phát tiếp. 
                           .</p>
                  <a href="#">Giá bán 1 năm sử dụng : 25.000.000đ.</a> | <a href="#">Giá bán 1 năm sử dụng 40.000.000 đ - có thểm chức năng quản lý CSDL của nội dụng bài hát, hay tư liệu (248)</a> 
                </td>
              </tr>
              <tr> 
                <td> <h2>Phần mềm Quản lý tư liệu , Tính nhuận bút, Lập lịch quảng cáo</h2>
                  Dùng cho các Đài PT-TH Tỉnh 
                  <img src="images/templatemo_image_02.jpg" id="view" alt="image 2" /> 
                  <p>Quản lý tư liệu : Quản lý nội dung tin như : Biên tập , quay phim, nội dung tin. 
                        Quản lý quảng cáo : Lập lình hàng ngày phát sóng, báo cáo các hợp đồng đã phát sóng có chức năng hỗ trợ sắp list
                        Quản lý nhuận bút : Cập nhật dữ liệu phát sóng hàng ngày, lãnh đạo duyệt sếp loại, tính nhuận bút cho từng phóng viên, 
                        dựa vào đơn giá
                    .</p>
                  <a href="#">Giá bán : hàng năm.</a> | <a href="#">)</a> 
                </td>
              </tr>
            </table>
          

                '; 
 }

?>
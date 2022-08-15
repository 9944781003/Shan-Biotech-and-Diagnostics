<?php
if(isset($_POST["name"],$_POST["phone"])){
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				// More headers
				$headers .= 'From: arul@touchskytechnologies.com' . "\r\n";
				$headers .= 'Cc: shanbiotechsiva@gmail.com' . "\r\n";
				$message="<html>
	<head>
	</head>
	<link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>
	<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
	<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
	<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-3 col-sm-6'>
					<div class='card hovercard' style='margin: 10px 0 20px 0; border-top-width: 0; border-bottom-width: 2px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative; padding-top: 0; overflow: hidden; text-align: center; background-color: rgba(214, 224, 226, 0.2);'>
						<div class='cardheader' style='background-image: url('http://lfhss-salem.com/img/banner_alumni.jpg'); background-size: cover; height: 135px;'>
						</div>
						<div class='avatar' style='position: relative; top: -50px; margin-bottom: -50px;'>
							<img alt='' src='https://png.pngtree.com/element_our/png/20181229/vector-chat-icon-png_302635.jpg' style='width: 100px; height: 100px; max-width: 100px; max-height: 100px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%; border: 5px solid rgba(255,255,255,0.5);' width='100' height='100'>
						</div>
						<div class='info' style='padding: 4px 8px 10px;'>
							<div class='title' style='margin-bottom: 4px; font-size: 24px; line-height: 1; color: #262626; vertical-align: middle;'>
								<a target='_blank' href='#'>".$_POST['name']." </a>
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Phone</strong> <br>
										".$_POST['phone']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Email</strong> <br>
										".$_POST['email']."
							</div>
							<div class='desc' style='overflow: hidden; font-size: 12px; line-height: 20px; color: #737373; text-overflow: ellipsis;'>
										<strong>Comments</strong> <br>
										".$_POST['comments']."
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
	</div>
</html>";
				  if(mail('kaarulmurugan.new@gmail.com','Website form message',$message,$headers)){
				echo "Thank you for submitting your details. Your Details have been registered with us. we will call you if any more details required"  ;
				  }
}
?>
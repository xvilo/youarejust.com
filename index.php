<?php
	$input = array("beautifull", "weird", "a piece of bacon", "jummy", "a nerd", "stupid", "an Artist", "peter griffin", "Justin bieber", "my momma", "your momma", "a turd", "noting", "empty minded", "empty", "comic sans", "a balustrade", "sandwich", "a computer screen", "slice of bread", "a meatball", "a train", "doge", "a simplistic meme", "a pornhub user", "an animated gif", "silver 1", "smiling", "listening", "an animal", "a human being", "a cat", "a pig", "a dog", "an indie jesus", "steam punk", "a nerd", "a pro gamer", "a pro cs:go player", "an technician", "a treasure", "a great idea", "a womand with a weird beard", "a moron", "a xVideos user", "a xHamster user", "a YouPorn", "using Reality Kings in de background right now</h1><iframe src='http://www.realitykings.com/main.htm' style='border:0px #FFFFFF none;' name='realitykings' scrolling='no' frameborder='0' marginheight='0px' marginwidth='0px' height='1px' width='1px'></iframe><h1 style='display:none;'>", "a Reality Kings user", "a Slutload user", "a Tube8 user", "the meaning of life", "sinterklaas", "a bar of chocolat");
	$rand_keys = array_rand($input);	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>You are just <?php echo $input[$rand_keys] ?>.</title>
<style>body,html{font:12px arial,helvetica,sans-serif;background:#ffba00;color:#000;margin:0;height:100%;overflow:hidden}h1{font:bold 96px arial,helvetica,sans-serif;margin:64px 64px 0 64px;text-transform:uppercase}.facebook{background:none;border:none;bottom:5px;display:block;font-size:12px;left:64px;outline:none;position:absolute;width:300px}</style>
</head>
<body>
<h1>You are just <?php echo $input[$rand_keys] ?>.</h1>
<!-- anything cool to add? justmail@youarejust.com -->
</body>
</html>	

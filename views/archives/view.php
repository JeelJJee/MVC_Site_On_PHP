<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Personal Blog</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script async type="text/javascript" src="/template/javascript/main.js"></script>
</head>
<body>
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li ><a href="<?php echo '/' ?>">Homepage</a></li>
				<li><a href="<?php echo '/news' ?>">Blog</a></li>
				<li ><a href="<?php echo '/photos' ?>">Photos</a></li>
				<li><a href="<?php echo '/about' ?>">About</a></li>
				<li class="current_page_item"><a href="<?php echo '/archives' ?>">Archives</a></li>
				<li><a href="<?php echo '/contacts' ?>">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>

<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="/"> Blog </a></h1>
				<p>Your personal blog <a href="/archives"> archives </a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<?php
						
						if (isset($archivesItem[0])){
							echo '<font size="5" color="red" face="Arial">Архивы за ';
							echo (substr( $archivesItem[0]['data'] , 0, 4));
							echo '</font>';
						};

						
						?>

						<?php foreach ($archivesItem as $newsItem):?>
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['authorname'];?></a> on <?php echo $newsItem['data'];?>
							&nbsp;&bull;&nbsp; <a href='/news/<?php echo $newsItem['id'] ;?>' class="permalink"> Лента </a></p>
						<div class="entry">
							<p><img src="/template/images/<?php echo $newsItem['id'];?>.jpg" width="700" height="400" alt="" /></p>
							<p><?php echo $newsItem['short_content'];?></p>
						</div>
					</div>
				<?php endforeach;?>

					</div>
					<p><a href='/news/' class="permalink"> Лента</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
				
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2013 somesitename. All rights reserved. Design by somename.</p>
</div>
<!-- end #footer -->
</body>
</html>

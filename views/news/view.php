<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Chosen Personal Blog</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script async type="text/javascript" src="/template/javascript/main.js"></script>
</head>
<body>
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li ><a href="<?php echo '/' ?>">Homepage</a></li>
				<li class="current_page_item"><a href="<?php echo '/news' ?>">Blog</a></li>
				<li><a href="<?php echo '/photos' ?>">Photos</a></li>
				<li><a href="<?php echo '/about' ?>">About</a></li>
				<li><a href="<?php echo '/archives' ?>">Archives</a></li>
				<li><a href="<?php echo '/contacts' ?>">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>

<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="/">Blog </a></h1>
				<p>Your personal blog <a href="/"></a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['authorname'];?></a> on <?php echo $newsItem['data'];?>
							&nbsp;&bull;&nbsp; <a href='/news/' class="permalink"> Назад </a></p>
						<div class="entry">
							<p><img src="/template/images/<?php echo $newsItem['id'];?>.jpg" width="100%" height="100%" alt="" /></p>
							<p><?php echo $newsItem['content'];?></p>
						</div>
					</div>
					<p><a href='/news/' class="permalink"> Назад ко всем новостям</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Последняя новость</h2>
							<p>Сегодня салют на площади Победы в 22:00</p>
						</li>
						<li>
							<h2>Категории</h2>
							<ul>
								<li><a href="/category/1">Кулинария</a></li>
								<li><a href="/category/2">Наука</a></li>
								<li><a href="/category/3">Компьютеры</a></li>
								<li><a href="/category/4">Природа</a></li>
								
							</ul>
							
						</li>
						<li>
							<h2>Ссылки</h2>
							<ul>
								<li><a href="http://instagram.com">Instagram</a></li>
								<li><a href="http://vk.com">Vkontakte</a></li>
								<li><a href="http://facebook.com">Facebok</a></li>
								<li><a href="http://twitter.com">Twitter</a></li>
								<li><a href="http://yourube.com">Youtube</a></li>
								
							</ul>
						</li>
						<li>
							<h2>Архивы</h2>
							<ul>
								<li><a href="/archives/2020">2020 год</a></li>
								<li><a href="/archives/2019">2019 год</a></li>
								
							</ul>
						</li>
					</ul>
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

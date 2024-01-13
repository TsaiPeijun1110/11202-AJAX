<?php include_once "./api/db.php";

if (!isset($_SESSION['login'])) {
	to("index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>卓越科技大學校園資訊系統</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
</head>
<style>
	/* .nav{
		width: 100%;
		height:200px;
		align-items: center;
		display: flex;
		justify-content: center;
	} */
</style>

<body>


	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="?do=admin">後台管理</a>
			
			<div class="collapse navbar-collapse justify-content-centers" id="navbarNavAltMarkup">
				<div class="navbar-nav" style="white-space: nowrap; flex-wrap:wrap">
					<!-- <a class="nav-link active" aria-current="page" href="?do=title">網站標題管理</a> -->
					<a class="nav-link" href="?do=title">網站標題管理</a>
					<a class="nav-link" href="?do=ad">動態文字廣告管理</a>
					<a class="nav-link" href="?do=mvim">動畫圖片管理</a>
					<a class="nav-link" href="?do=image">校園映象資料管理</a>
					<a class="nav-link" href="?do=total">進站總人數管理</a>
					<a class="nav-link" href="?do=bottom">頁尾版權資料管理</a>
					<a class="nav-link" href="?do=news">最新消息資料管理</a>
					<a class="nav-link" href="?do=admin">管理者帳號管理</a>
					<a class="nav-link" href="?do=menu">選單管理</a>
				</div>
			</div>
			<div>
			<button class="btn btn-outline-success" style="white-space: nowrap;" type="button" onclick="location.href='./api/logout.php'">登出</button>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			</div>
		</div>
	</nav>



	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>

	<div id="main" style="height: calc(100vh - 61px - 113px);">
		<?php
		$title = $Title->find(['sh' => 1]);
		?>
		<a title="<?= $title['text']; ?>" href="index.php">
			<!-- <div class="ti" style="background:url(&#39;./img/ bn<?= $title['img']; ?>&#39;); background-size:100%;"></div> -->
			<!--標題-->
		</a>
		<div id="ms">
			<div id="lf" style="height:auto; width:100%">

				<div class="" >
					<!--正中央-->
					
						
					<?php

					$do = $_GET['do'] ?? 'title';
					$file = "./back/{$do}.php";
					if (file_exists($file)) {
						include $file;
					} else {
						include "./back/title.php";
					}

					?>
				</div>
				<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
				<script>
					$(".sswww").hover(
						function() {
							$("#alt").html("" + $(this).children(".all").html() + "").css({
								"top": $(this).offset().top - 50
							})
							$("#alt").show()
						}
					)
					$(".sswww").mouseout(
						function() {
							$("#alt").hide()
						}
					)
				</script>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	</div>
	<footer class="container-fluid flex-shrink-0 py-4 bg-dark text-white-50">
		<div class="container text-center">
			<small><?= $Bottom->find(1)['bottom']; ?></small>
			<span class="t">進站總人數:<?= $Total->find(1)['total']; ?></span>
		</div>
	</footer>

</body>

</html>
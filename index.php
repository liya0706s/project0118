<?php include_once "./api/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->

<head>
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>卓越科技大學校園資訊系統</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<!-- font-awesome cdn css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- bootstrap 5.2 cdn js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/js/bootstrap.min.js" integrity="sha512-Hqe3s+yLpqaBbXM6VA0cnj/T56ii5YjNrMT9v+us11Q81L0wzUG0jEMNECtugqNu2Uq5MSttCg0p4KK0kCPVaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- bootstrap 5.2 cdn css-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" rel="stylesheet">

	<!-- carousel script and link  -->
	<script src="../assets/js/color-modes.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		/* carousel style START  */
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		.b-example-divider {
			width: 100%;
			height: 3rem;
			background-color: rgba(0, 0, 0, .1);
			border: solid rgba(0, 0, 0, .15);
			border-width: 1px 0;
			box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
		}

		.b-example-vr {
			flex-shrink: 0;
			width: 1.5rem;
			height: 100vh;
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor;
		}

		.nav-scroller {
			position: relative;
			z-index: 2;
			height: 2.75rem;
			overflow-y: hidden;
		}

		.nav-scroller .nav {
			display: flex;
			flex-wrap: nowrap;
			padding-bottom: 1rem;
			margin-top: -1px;
			overflow-x: auto;
			text-align: center;
			white-space: nowrap;
			-webkit-overflow-scrolling: touch;
		}

		.btn-bd-primary {
			--bd-violet-bg: #712cf9;
			--bd-violet-rgb: 112.520718, 44.062154, 249.437846;

			--bs-btn-font-weight: 600;
			--bs-btn-color: var(--bs-white);
			--bs-btn-bg: var(--bd-violet-bg);
			--bs-btn-border-color: var(--bd-violet-bg);
			--bs-btn-hover-color: var(--bs-white);
			--bs-btn-hover-bg: #6528e0;
			--bs-btn-hover-border-color: #6528e0;
			--bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
			--bs-btn-active-color: var(--bs-btn-hover-color);
			--bs-btn-active-bg: #5a23c8;
			--bs-btn-active-border-color: #5a23c8;
		}

		.bd-mode-toggle {
			z-index: 1500;
		}

		.bd-mode-toggle .dropdown-menu .active .bi {
			display: block !important;
		}

		/* carousel style END  */
	</style>
	<!-- Custom styles for this carousel template -->
	<link href="carousel.css" rel="stylesheet">
</head>

<body>
	<main>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container-fluid">
				<!-- <a class="navbar-brand" href="index.php">
					<i class="fa-solid fa-school"></i>
				</a> -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">

						<li class="nav-item">
							<a class="nav-link active" href="index.php">
								<i class="fa-solid fa-school"></i>
							</a>
						</li>

						<!-- 靜態導航項目 -->
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="back.php">返回管理</a>
						</li>

						<!-- 動態生成的主選單和子選單 -->
						<!-- 有子選單開始 -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<!-- 有子選單結束 -->



					</ul>
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="item">
						<?php
						$title = $Title->find(['sh' => 1]);
						?>
						<a title="<?= $title['text']; ?>" href="index.php">
							<!-- 按下標題都會回到首頁 -->
							<div class="ti" style="background:url('./img/<?= $title['img']; ?>'); background-size:cover; w-100"></div>
							<!--標題-->
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="alert alert-warning alert-dismissible fade show fixed-top" role="alert" style="margin-top: 0; top: 0;">
			<strong>SERVING LUNCH EVERY WEEKDAY!</strong> 11:00AM-2:30PM
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div> -->


		<div id="main">

			<div id="ms">
				<div id="lf" style="float:left;">
					<!--主選單區開始-->
					<div id="menuput" class="dbor">
						<span class="t botli">主選單區</span>
						<?php
						// 撈取全部的主選單(menu_id=0)且有顯示的
						$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
						foreach ($mainmu as $main) {
						?>
							<div class="mainmu">
								<a href="<?= $main['href']; ?>" style="color:#000; font-size:13px; text-decoration:none;"><?= $main['text']; ?></a>
								<?php
								// 去數>0代表，至少有一個次選單
								if ($Menu->count(['menu_id' => $main['id']]) > 0) {
									echo "<div class='mw'>";
									$subs = $Menu->all(['menu_id' => $main['id']]);
									foreach ($subs as $sub) {
										echo "<a href='{$sub['href']}'>";
										echo "<div class='mainmu2'>";
										echo $sub['text'];
										echo "</div>";
										echo "</a>";
									}
									echo "</div>";
								}
								?>
							</div>

						<?php
						}
						?>
					</div>
					<!-- 主選單區結束 -->

					<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
						<span class="t">進站總人數 : <?= $Total->find(1)['total']; ?></span>
					</div>
				</div>

				<!-- 中間區塊開始 -->

				<?php
				$do = $_GET['do'] ?? 'main';
				// 如果$do符合isset就是$_GET['do']，否則導入main
				// $do = isset($_GET['do']) ? $_GET['do'] : 'main';
				// 檔案的位置，$do設定為變數，多個頁面自動替換，不用打很長的程式碼
				$file = "./front/{$do}.php";
				// 判斷檔案是否存在(路徑包含檔名)，如果是亂打的會引入main.php
				if (file_exists($file)) {
					include $file;
				} else {
					include "./front/main.php";
				}


				?>

				<!-- 中間區塊結束 -->

				<div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
					<!--右邊-->
					<!-- 2023-12-18  寫判斷，如果登入使用者，返回管理;反之會是管理登入-->
					<?php
					if (isset($_SESSION['login'])) {

					?>
						<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="location.href='back.php'">返回管理</button>
					<?php
					} else {
					?>
						<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="location.href='?do=login'">管理登入</button>
					<?php
					}
					?>
					<div style="width:89%; height:480px;" class="dbor">
						<span class="t botli">校園映象區</span>

						<div class="cent" onclick="pp(1)"><img src="./icon/up.jpg" alt=""></div>
						<!-- <div id="ssaa1" class="im">
						<img src="" alt="">
					</div> -->
						<?php
						// 有被設定為顯示的才要
						$imgs = $Image->all(['sh' => 1]);

						foreach ($imgs as $idx => $img) {
						?>
							<div id="ssaa<?= $idx; ?>" class='im cent'>
								<img src="./img/<?= $img['img']; ?>" style="width:150px;height:103px;border:3px solid orange;margin:3px">
							</div>
						<?php
						}
						?>
						<div class="cent" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>

						<script>
							var nowpage = 1,
								num = <?= $Image->count(['sh' => 1]); ?>;
							// pp function裡面的參數x, (nowpage-1) 要加小括號
							// 如果(現在頁面-1)>0,代表要往上一頁，現在至少是2
							// 邏輯等同於分頁和萬年曆的上個月份 
							// x意思是往前或是往後的判斷值, 如果每次要換頁一次換三張
							// num代表總圖片數量 
							function pp(x) {
								var s, t;
								if (x == 1 && nowpage - 1 >= 0) {
									nowpage--;
								}
								if (x == 2 && (nowpage + 1) <= num * 1 - 3) {
									nowpage++;
								}
								$(".im").hide()

								// s 是for 迴圈中的計數器， 它的值在每次迭代中會分別是 0、 1、 2
								// nowpage 是目前的頁碼， 它是一個外部定義的變數。
								// t 是一個臨時變數， 用來存儲計算後的值

								// 迴圈跑三次 0,1,2
								for (s = 0; s <= 2; s++) {
									t = s * 1 + nowpage * 1;
									$("#ssaa" + t).show()
								}
							}
							pp(2)
							// 先執行2??
						</script>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div style="width:100%; left:0px; position:relative; background:#FC3; margin-top:75px; height:123px; display:block;">
				<span class="t" style="line-height:123px;"><?= $Bottom->find(1)['bottom']; ?></span>
			</div>
		</div>
	</main>
</body>

<!-- 在文件末尾加入 Bootstrap JS 和 Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

</html>
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
	<link href="./css/carousel.css" rel="stylesheet">
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
				<div class="collapse navbar-collapse row" id="navbarNav">
					<div class="col-9">
						<ul class="navbar-nav">

							<li class="nav-item">
								<a class="nav-link active" href="index.php">
									<i class="fa-solid fa-school"></i>
								</a>
							</li>

							<!-- 靜態導航項目 -->
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index.php">Home</a>
							</li>

							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index.php">Link</a>
							</li>

							<!-- 動態生成的主選單和子選單 -->
							<!-- 有子選單開始 -->
							<!-- <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li> -->

							<?php
							$mainMenus = $Menu->all(['sh' => 1, 'menu_id' => 0]);
							foreach ($mainMenus as $main) {
								$subMenus = $Menu->all(['menu_id' => $main['id']]);
								$hasSub = count($subMenus) > 0;

								echo "<li class='nav-item";
								echo $hasSub ? " dropdown" : "";
								echo "'>";

								echo "<a class='nav-link";
								echo $hasSub ? " dropdown-toggle' href='#' id='navbarDropdown{$main['id']}' role='button' data-bs-toggle='dropdown' aria-expanded='false'" : "' href='{$main['href']}'";
								echo ">{$main['text']}</a>";

								if ($hasSub) {
									echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdown{$main['id']}'>";
									foreach ($subMenus as $sub) {
										echo "<li><a class='dropdown-item' href='{$sub['href']}'>{$sub['text']}</a></li>";
									}
									echo "</ul>";
								}

								echo "</li>";
							}
							?>
							<!-- 有子選單結束 -->
						</ul>
					</div>
					<div class="col-3 d-flex">
						<!-- 判斷有沒有登入的狀態，顯示不同的連結 -->
						<div class="item">
							<?php
							if (isset($_SESSION['login'])) {
							?>
								<a class="nav-link active me-5" href="back.php">
									<i class="fa-solid fa-list-check"></i>&nbsp;&nbsp;返回管理
								</a>
							<?php
							} else {
							?>
								<a class="nav-link active" href="?do=login">
									<i class="fa-solid fa-right-to-bracket"></i>
									&nbsp;&nbsp;管理登入
								</a>
							<?php
							}
							?>
						</div>
						<div class="item">
						<i class="fa-solid fa-chart-simple"></i>
							今日人數 <?= $Total->find(1)['total']; ?>
						</div>
					</div>
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
							<div class="ti" style="background:url('./img/<?= $title['img']; ?>'); background-size:contain"></div>
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

		<!-- bootstrap carousel start -->

		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
				<div class="carousel-inner">
					<?php
					// 在這裡放入你的 PHP foreach 迴圈
					$imgs = $Image->all(['sh' => 1]);
					foreach ($imgs as $idx => $img) {
						// 判斷是否是第一個項目，並添加 active 類
						$activeClass = ($idx === 0) ? 'active' : '';
					?>
						<div class="carousel-item <?= $activeClass; ?>">
							<!-- svg這邊 放圖片 -->
							<!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
							<rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
						</svg> -->
							<img src="./img/<?= $img['img']; ?>" class="d-block w-100" alt="<?= $img['alt']; ?>" style="">
							<div class="container">
								<div class="carousel-caption text-start">
									<h1>556888Example headline.</h1>
									<p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
									<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
								</div>
							</div>
						</div>
					<?php
					}
					?>
					<div class="carousel-item">
						<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
							<rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
						</svg>
						<div class="container">
							<div class="carousel-caption">
								<h1>Another example headline.</h1>
								<p>Some representative placeholder content for the second slide of the carousel.</p>
								<p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
							<rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
						</svg>
						<div class="container">
							<div class="carousel-caption text-end">
								<h1>One more for good measure.</h1>
								<p>Some representative placeholder content for the third slide of this carousel.</p>
								<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>

		<!-- bootstrap carousel end -->

		<div class="container-fluid">
			<div class="row">
				<!-- 中間區塊開始 -->
				<?php
				$do = $_GET['do'] ?? 'main';
				$file = "./front/{$do}.php";
				// 判斷檔案是否存在(路徑包含檔名)，如果是亂打的會引入main.php
				if (file_exists($file)) {
					include $file;
				} else {
					include "./front/main.php";
				}
				?>
				<!-- 中間區塊結束 -->
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

</html>
<?php include_once "./api/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="icon" href="./img/kids_coding-removebg-preview.png" type="image/x-icon">
	<title>從小學程式，程式從小學</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link href="./css/bootstrap.min.css" rel="stylesheet">

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
		.carousel-item img {
			vertical-align: middle;
		}
	</style>

</head>

<body>
	<main>
		<!-- navbar -->
		<div class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container-fluid">
				<!-- <a class="navbar-brand" href="index.php">
					<i class="fa-solid fa-school"></i>
				</a> -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse row" id="navbarNav">
					<div class="col-9">
						<ul class="navbar-nav d-flex flex-row">

							<li class="nav-item me-2">
								<a class="nav-link active" href="#">
									<i class="fa-solid fa-code"></i>
									<!-- <img src="./img/kids_coding-removebg-preview.png" style="width:25px; height:25px"> -->
								</a>
							</li>

							<!-- 靜態導航項目 -->
							<li class="nav-item me-2">
								<a class="nav-link" aria-current="page" href="#">Home</a>
							</li>

							<li class="nav-item me-2">
								<a class="nav-link" aria-current="page" href="#product">Product</a>
							</li>

							<li class="nav-item me-2">
								<a class="nav-link" aria-current="page" href="#reviews">Reviews</a>
							</li>

							<li class="nav-item me-2">
								<a href="index.php?do=login" class="nav-link" data-bs-toggle='modal' data-bs-target='#exampleModal'>會員登入</a>
							</li>

							<li class="nav-item justify-content-end">
								<a href="" class="nav-link">hihi</a>
							</li>
						</ul>
					</div>

					<div class="col-3">
						<ul class="navbar-nav d-flex flex-row justify-content-end">
							<!-- 判斷有沒有登入的狀態，顯示不同的連結 -->
							<li class="nav-item">
								<?php
								if (isset($_SESSION['login'])) {
								?>
									<a class="nav-link active me-5" aria-current="page" href="back.php">
										<i class="fa-solid fa-list-check"></i>&nbsp;返回管理
									</a>
								<?php
								} else {
								?>
									<!-- open sidebar / offcanvas -->
									<a class="nav-link active" aria-current="page" href="#sidebar" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar-label">
										<i class="fa-solid fa-right-to-bracket"></i>
										&nbsp;管理登入
									</a>
								<?php
								}
								?>
							</li>
							<li class="item mt-2">
								<i class="fa-solid fa-chart-simple me-1"></i>
								今日 <?= $Total->find(1)['total']; ?> 人
							</li>
						</ul>

					</div>
				</div>

			</div>
		</div>

		<div>
			<!-- offcanvas -->
			<div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="sidebar-label">管理員登入</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<form action="./api/check.php" method="post">
						<?php
						// 透過session，如果有登入成功就直接到後台
						if (isset($_SESSION['login'])) {
							to("./back.php");
						}

						// 登入的功能，這裡是GET傳值的error 帳號或密碼錯誤
						if (isset($_GET['error'])) {
							echo "<span style='color:red;'>";
							echo $_GET['error'];
							unset($_GET['error']);
							echo "</span>";
						}
						?>

						<div class="container mt-3">
							<h3></h3>
							<div class="mb-3 mt-3">
								<label for="acc">帳號:</label>
								<input type="text" class="form-control" id="acc2" placeholder="Enter acc" name="acc">
							</div>
							<div class="mb-3 mt-3">
								<label for="pw">密碼:</label>
								<input type="password" class="form-control" id="pw2" placeholder="Enter password" name="pw">
							</div>
							<div class="form-check mb-3">
								<label class="form-check-label">
									<!-- <input class="form-check-input" type="checkbox" name="remember"> 註冊 -->
									<a href="./front/reg.php">註冊帳號</a>
								</label>
							</div>
							<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
							<div class="modal-footer">
								<button type="reset" class="btn btn-secondary me-2">重置</button>
								<button type="submit" class="btn btn-primary">送出</button>
							</div>
					</form>
				</div>

			</div>
		</div>


		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title ms-4" id="exampleModalLabel">會員登入</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- ... -->
						<?php
						// 透過session，如果有登入成功就直接到前台
						if (isset($_SESSION['login'])) {
							to("./index.php");
						}

						// 登入的功能，這裡是GET傳值的error 帳號或密碼錯誤
						if (isset($_GET['error'])) {
							echo "<span style='color:red;'>";
							echo $_GET['error'];
							unset($_GET['error']);
							echo "</span>";
						}
						?>

						<div class="container mt-3">
							<h3></h3>
							<!-- <form action="./api/check.php" method="post"> -->
							<div class="mb-3 mt-3">
								<label for="acc">帳號:</label>
								<input type="text" class="form-control" id="acc" placeholder="Enter acc" name="acc">
							</div>
							<div class="mb-3 mt-3">
								<label for="pw">密碼:</label>
								<input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">
							</div>
							<div class="mb-3 mt-3">
								<label for="ans">驗證碼:</label>
								<?php
								// 兩位數的亂數區間
								$a = rand(10, 99);
								$b = rand(10, 99);
								// SESSION比一般變數長久存在伺服器端，客戶看不到
								$_SESSION['ans'] = $a + $b;
								echo $a . " + " . $b . " =";
								?>
								<input type="text" name="ans" id="ans">
							</div>
							<div class="form-check mb-3">
								<label class="form-check-label">
									<!-- <input class="form-check-input" type="checkbox" name="remember"> 註冊 -->
									<a href="./front/reg.php">註冊帳號</a>
								</label>
							</div>
							<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
							<div class="modal-footer">
								<button type="reset" class="btn btn-secondary">重置</button>
								<button onclick="login('mem')" class="btn btn-primary">確認</button>
							</div>
							<!-- </form> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			// 定義一個名為 login 的函數，它接受一個參數：table (mem和admin)
			function login(table) {
				// 發送一個 GET 請求到 './api/chk_ans.php' 確認驗證碼
				$.get('./api/chk_ans.php', {
					ans: $("#ans").val()
				}, (chk) => {
					// 將 ans 參數設置為 id 為 'ans' 的元素的值
					// chk 是從 chk_ans.php 返回的響應
					if (parseInt(chk) == 0) {
						alert("驗證碼錯誤，請重新輸入")
					} else {
						// 如果驗證碼正確，發送一個 POST 請求到 './api/chk_pw.php'
						$.post("./api/chk_pw.php", {
								table, // 傳送 table 參數 mem
								acc: $("#acc").val(), // 傳送 acc 參數，其值為 id 為 'acc' 的元素的值
								pw: $("#pw").val()
							}, // 傳送 pw 參數，其值為 id 為 'pw' 的元素的值
							(res) => { // res 是從 chk_pw.php 返回的響應
								if (parseInt(res) == 0) {
									// 如果 res 轉換為整數後等於 0，顯示錯誤訊息
									alert("帳號或密碼錯誤，請重新輸入")
								} else {
									// 如果帳號和密碼正確，則重定向到 'index.php'
									location.href = 'index.php';
								}
							})
					}
				})
			}
		</script>

		<!-- alert 文字廣告 原本的marquee  -->
		<div style="padding-top:58px">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<marquee class="text-center">
					<?php
					$ads = $Ad->all(['sh' => 1]);
					foreach ($ads as $ad) {
						echo $ad['text'];
						echo '&nbsp;&nbsp;|&nbsp;&nbsp;';
					}
					?>
				</marquee>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>

		<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Holy guacamole!</strong> You should check in on some of those fields below.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div> -->
		<!-- alert 文字廣告結束 -->

		<!-- bootstrap carousel start -->
		<div class="container-fluid">
			<div id="carouselExampleAutoplaying" class="carousel slide mb-4 mt-0" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="3000">
						<img src="./img/slide-1.jpg" class="d-block w-100" alt="...">
						<!-- <div style="background-image:url('./img/school.jpg');background-size:cover; "></div> -->
					</div>
					<div class="carousel-item" data-bs-interval="3000">
						<img src="./img/slide-2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item" data-bs-interval="3000">
						<img src="./img/scratch-coding-1.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<!-- bootstrap carousel end -->

		<!-- product plans start -->
		<section id="product" class="bg-light mt-0">
			<div class="container-fluid">
				<div class="text-center">
					<h2>Pricing Plans</h2>
					<p class="lead text-muted">Choose a pricing plan to suit you</p>
				</div>

				<div class="row my-5 align-items-center justify-content-center g-5 mt-0">
					<div class="col-8 col-lg-4 col-xl-3">
						<div class="card border-0 mb-2">
							<img src="./img/KIBO-120519_9358.jpg" class="card-img-top" alt="...">
							<div class="card-body text-center py-4">
								<h4 class="card-title">KIBO 程式機器人套件</h4>
								<p class="lead card-subtitle">適合中大班-低年級</p>
								<p class="display-5 my-4 text-primary fw-bold">$79.9</p>
								<p class="card-text mx-5 text-muted d-none d-lg-block">
									KIBO 是一套針對幼兒及小學生的無屏幕可編程機器人套件，使用實體木製編碼積木，孩子們可以排列並掃描這些積木，來設計他們自己的創意程式。
								</p>
								<a href="./front/shop.php" class="btn btn-outline-primary btn-lg mt-3 text-decoration-none">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-8 col-lg-4 col-xl-3">
						<div class="card border-2 border-primary mb-2">
							<di class="card-header text-center text-primary fw-bolder">Most Popular</di>
							<img src="./img/multi-page.png" class="card-img-top border border-light" alt="...">
							<div class="card-body text-center py-4">
								<h4 class="card-title">ScratchJr</h4>
								<p class="lead card-subtitle">適合中大班-中年級</p>
								<p class="display-5 my-4 text-primary fw-bold">$89.9</p>
								<p class="card-text mx-5 text-muted d-none d-lg-block">
									ScratchJr 是適合兒童的免費程式語言。利用區塊程式讓孩子們創造自己的互動故事和遊戲。截至2023年8月，該應用程式已超過4,500萬用戶，已創建超過1.94億個專案。目前被翻譯成48種語言！
								</p>
								<a href="./front/shop.php" class="btn btn-outline-primary btn-lg mt-3 text-decoration-none">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-8 col-lg-4 col-xl-3">
						<div class="card border-0 mb-2">
							<img src="./img/scratch_microbit.jpg" class="card-img-top border border-light" alt="...">
							<div class="card-body text-center py-4">
								<h4 class="card-title">Scratch & micro:bit</h4>
								<p class="lead card-subtitle">適合高年級-國中三年級</p>
								<p class="display-5 my-4 text-primary fw-bold">$99.9</p>
								<p class="card-text mx-5 text-muted d-none d-lg-block">
									Scratch 是世界上最大的兒童編寫程式語言平台，具有簡單視覺化介面的編碼語言，可增進運算思維和解決問題的能力、創意教育及學習、自我表達和協作。
									micro:bit 是一塊微型電路板，旨在幫助孩子學習編寫程式和利用科技進行創作。包括LED顯示器、按鈕和運動感應器等功能，可以連接到Scratch結合數位和物理的創意項目。
								</p>
								<a href="./front/shop.php" class="btn btn-outline-primary btn-lg mt-3 text-decoration-none">Buy Now</a>
							</div>
						</div>
					</div>

				</div>
		</section>
		<!-- product plans end -->

		<!-- review area / carousel with words start -->
		<?php
		include "./front/reviews.php"
		?>
		<!-- review area / carousel with words end -->

		<!-- footer start -->
		<div class="container">
			<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
				<div class="col-md-4 d-flex align-items-center">
					<a href="https://getbootstrap.com/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-0.5">
						<svg class="bi" width="30" height="24">
							<use xlink:href="#bootstrap"></use>
						</svg>
					</a> 
					<span class="mb-3 mb-md-0 text-body-secondary">© 2024 Angie Lee Website. All rights reserved.</span>
					<span class="align-itmes-center">xxxx</span>
				</div>

				<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
					<li class="ms-3">
						<a class="text-body-secondary" href="https://www.facebook.com">
							<i class="fa-brands fa-facebook fa-xl" style="color: #6c757d;"></i>
						</a>
					</li>
					<li class="ms-3">
						<a class="text-body-secondary" href="https://www.instagram.com">
							<i class="fa-brands fa-instagram fa-xl" style="color: #6c757d;"></i>
						</a>
					</li>
					<li class="ms-3">
						<a class="text-body-secondary" href="mailto:liya0706s@gmail.com">
							<!-- <i class="fa-brands fa-threads fa-xl" style="color: #6c757d;"></i> -->
							<i class="fa-solid fa-envelope fa-xl" style="color: #6c757d;"></i>
						</a>
					</li>
				</ul>
			</footer>
		</div>
		<!-- footer end  -->
	</main>
</body>

<!-- 在文件末尾加入 Bootstrap JS 和 Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>

</html>
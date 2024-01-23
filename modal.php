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

<!-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-primary" ></a> -->
<!-- 以上a link 可以toggle modal -->

<?php
$mainMenus = $Menu->all(['sh' => 1, 'menu_id' => 0]);
foreach ($mainMenus as $main) {
    $subMenus = $Menu->all(['menu_id' => $main['id']]);
    $hasSub = count($subMenus) > 0;

    echo "<li class='nav-item";
    echo $hasSub ? " dropdown" : "";
    echo "'>";

    echo "<a class='nav-link";
    echo $hasSub ? " dropdown-toggle' href='#' id='navbarDropdown{$main['id']}' role='button' data-bs-toggle='dropdown' aria-expanded='false'" : "' data-bs-toggle='modal' data-bs-target='#exampleModal' href='{$main['href']}'";
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
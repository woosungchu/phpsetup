<html>
<head>
<!-- meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="2023national">
<meta name="author" content="woosungchu">
<!-- statics -->
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/index.css">

</head>
<body>
<header>
	<nav class="navbar navbar-expand-md navbar-light">
		<a class="navbar-brand" href="?page=main">빵집투어<a>
		<button class="navbar-toggler" type="button"
		data-toggle="collapse" data-target="navbarCollapse"
		aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggle-icon"></span>
		</button>
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto"><!-- mr-auto 로 밀어내기 -->
				<li class="nav-item"><a href="?page=timeline" class="nav-link">빵집소개</a></li>
				<li class="nav-item"><a href="?page=recommend" class="nav-link">브랜드추천</a></li>
				<li class="nav-item"><a href="?page=review" class="nav-link">브랜드후기</a></li>
				<li class="nav-item"><a href="?page=gallery" class="nav-link">갤러리</a></li>
			</ul>
			<form class="form-inline mt-md-0 mt-2" style="margin-bottom:0px;">
				<input class="form-control mr-sm-2" type="text" placeholder="크로와상" aria-label="검색">
				<button class="btn btn-outline-success" type="submit">검색</button>
			</form>
		</div>
	</nav>

</header>

<?php
switch($_GET['page']) {
	case 'main':
		include 'html/main.php';
		break;
	case 'timeline':
		include 'html/timeline.php';
		break;
	case 'recommend':
		include 'html/recommend.php';
		break;
	case 'review':
		include 'html/review.php';
		break;
	case 'gallery':
		include 'html/gallery.php';
		break;
	default:
		include 'html/main.php';

}
?>


	<footer></footer>

  </body>

</html>

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
<?php include 'html/header.php' ?>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'main';
// echo $page;

switch($page) {
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

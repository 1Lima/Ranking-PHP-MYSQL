<?php
include_once __DIR__ . '/inc/config.php';
include_once __DIR__ . '/inc/init.php';
?>
<!DOCTYPE html>
<title><?php echo $config->siteName; ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="icon" type="image/png" href="favicon.png">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/css/style.css?v=53423" />
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">
						Ranking 
						<br>
						<small>Todo o Tempo / Recente</small>
					</h3>
				</div>
				<div class="panel-body">
					<?php require __DIR__ . '/inc/while_ranking/loader.php'; ?>
				</div>
			</div>
		</div>
	</div>
</div>
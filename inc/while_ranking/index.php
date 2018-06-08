<?php
include_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<title>Redirecionando | <?php echo $config->siteName; ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="<?php echo $config->urlLocal; ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $config->urlLocal; ?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $config->urlLocal; ?>/assets/css/style.css?v=12312432">
<script src="<?php echo $config->urlLocal; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo $config->urlLocal; ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript">location.href="<?php echo $config->urlLocal; ?>"</script>
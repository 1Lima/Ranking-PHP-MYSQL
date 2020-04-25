<?php
include_once 'includes/config/functions.php';
$qRes = "SELECT * FROM users WHERE points >= 83 ORDER BY points DESC LIMIT 0, 100";
$qQuery = $mysqli->query($qRes);    
$i = 0;
echo '<ul class="list-group list-group-flush">';
if ($qQuery->num_rows > 0){
while($qRow = $qQuery->fetch_assoc()){ 
//$qReplace = $qRow['points']; //shows the points as follows: 234252324
$qReplace = number_format($qRow['points'], 0, '.', '.'); //shows the points as follows: 234.252.324
$i++;
?>
<li class="list-group-item d-flex justify-content-between align-items-center">
	<?php if($i == 1 OR $i == 2 OR $i == 3){ ?>
		<span class="pull-left"><i class="fas fa-trophy" style="color: <?php echo colorRank($i); ?>;"></i> &nbsp; <?php echo $qRow['name']; ?></span>
	<?php }else{ ?>
		<span class="pull-left"> &nbsp; <b><?php echo $i; ?></b> &nbsp; <?php echo $qRow['name']; ?></span>
	<?php } ?>
    <span class="badge badge-primary badge-pill">
		<span class="badge badge-primary badge-pill"><?php echo levelRank($qRow['points']); ?></span>
		&mdash;
		<?php echo $qReplace; ?> <small>Pontos</small>
	</span>
</li>
<?php 
}
	echo '</ul>';
}else{
	echo '<ul class="list-group"><li class="list-group-item text-center"><span>Nenhum <b>usuário</b> foi classificado ainda.</span></li></ul>';
}
?>
<!-- style="background-color: #e85a5b;border: 1px solid #e85a5b;" -->
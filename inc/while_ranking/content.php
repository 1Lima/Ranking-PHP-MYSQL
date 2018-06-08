<?php
$qRes = "SELECT * FROM users ORDER BY points DESC";
$qQuery = $mysqli->query($qRes);    
$i = 0;
if ($qQuery->num_rows > 0){
while($qRow = $qQuery->fetch_assoc()){ 
$qReplace = number_format($qRow['points'],0,'.','.'); //shows the points as follows: 234.252.324
$i++;
?>
<?php if($i == 1){ ?>
<tr>
	<td><span class="label label-gold"><i class="fa fa-trophy"></i> <?php echo $i; ?></span></td>
	<td><?php echo $qRow['name']; ?></td>
	<td><?php echo $qReplace; ?></td>
</tr>
<?php }elseif($i == 2){ ?>
<tr>
	<td><span class="label label-silver"><i class="fa fa-trophy"></i> <?php echo $i; ?></span></td>
	<td><?php echo $qRow['name']; ?></td>
	<td><?php echo $qReplace; ?></td>
</tr>
<?php }elseif($i == 3){ ?>
<tr>
	<td><span class="label label-bronze"><i class="fa fa-trophy"></i> <?php echo $i; ?></span></td>
	<td><?php echo $qRow['name']; ?></td>
	<td><?php echo $qReplace; ?></td>
</tr>
<?php }else{ ?>
<tr>
	<td><span class="label label-default"><?php echo $i; ?></span></td>
	<td><?php echo $qRow['name']; ?></td>
	<td><?php echo $qReplace; ?></td>
</tr>
<?php } ?>
<?php } ?>
<?php }else{ ?>
	<div class="well"><center>Nenhum usuário cadastrado no banco de dados</center></div>
<?php } ?>
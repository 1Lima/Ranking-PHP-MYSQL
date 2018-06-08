<?php 
$qRes = "SELECT * FROM users";
$qQuery = $mysqli->query($qRes);    
if ($qQuery->num_rows > 0){
?>
<table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Usuário</th>
        <th>Pontos</th>
      </tr>
    </thead>
    <tbody>
 		<?php require ("content.php"); ?>
    </tbody>
  </table>
<?php }else{ ?>
<div class="well"><center>Erro no banco de dados</center></div>
<?php } ?>
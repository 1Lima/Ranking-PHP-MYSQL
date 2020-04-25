<?php
//Chama os arquivos necessario
include_once __DIR__ . '/includes/config/config.php';
include_once __DIR__ . '/includes/config/init.php';

$img_src = "assets/images/bg-card-user.png";
$imgbinary = fread(fopen($img_src, "r"), filesize($img_src));
$img_str = base64_encode($imgbinary);

function experience($L) {
  $a = 0;
  for($x = 0; $x < $L; $x++) {
    $a += floor($x + 300 * pow(2, ($x / 7)));
  }
  return floor($a / 4);
}

$urlPath = "http://www.wjr.eti.br/nameGenerator/index.php?q=101&o=json";
$data = file_get_contents($urlPath);
$json = json_decode($data, true);

if(isset($_POST['btnSubmit'])){
    for($L = 1; $L <= 100; $L++) {

        $getName = $json[$L];
        $getPoints = experience($L);
    
        $iSql = "INSERT INTO users (name, points) VALUES ('$getName', '$getPoints')";
        $iQuery = $mysqli->query($iSql);

        if($iQuery){
            echo "<script>alert('100 usuários adicionados com sucesso.');</script>";
        echo "<script>window.location='".$config->urlLocal."/'; </script>";
        }else{
            echo "<script>alert('Algo deu errado, tente novamente mais tarde...');</script>";
        echo "<script>window.location='".$config->urlLocal."/insert_users.php#actions'; </script>";
        }
    }
}

if(isset($_POST['btnDelete'])){
    $dSql = "DELETE FROM users";
    $dQuery = $mysqli->query($dSql);

    if($dQuery){
        echo "<script>alert('Todos os usuários foram excluídos com sucesso.');</script>";
        echo "<script>window.location='".$config->urlLocal."/insert_users.php#actions'; </script>";
    }else{
        echo "<script>alert('Algo deu errado, tente novamente mais tarde...');</script>";
        echo "<script>window.location='".$config->urlLocal."/insert_users.php#actions'; </script>";
    }
}

if(isset($_POST['btnID'])){
    $aSql = "ALTER TABLE users AUTO_INCREMENT = 1";
    $aQuery = $mysqli->query($aSql);

    if($aQuery){
        echo "<script>alert('Todos os IDs foram redefinidos com sucesso.');</script>";
        echo "<script>window.location='".$config->urlLocal."/insert_users.php#actions'; </script>";
    }else{
        echo "<script>alert('Algo deu errado, tente novamente mais tarde...');</script>";
        echo "<script>window.location='".$config->urlLocal."/insert_users.php#actions'; </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Ranking</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="favicon.ico" type="image/x-icon" />
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.css">
      <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
   </head>
   <body>
      <div class="container" style="margin: 30px auto;">
         <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
               <div class="card">
                  <img class="card-img-top" src="data:image/jpg;base64,<?php echo $img_str; ?>">
                  <div class="card-body">
                     <h5 class="card-title">Adicionar Usuários</h5>
                     <p class="card-text">Clique no botão <b>Adicionar Usuários</b> para adicionar 100 usuários como teste.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <?php
                        for($L = 1; $L <= 100; $L++) {
                            echo '<li class="list-group-item">Nome: '.$json[$L].' - Level '.$L.' - Pontos : '.experience($L).'</li>';
                        }
                    ?>
                  </ul>
                  <div class="card-body row justify-content-center align-items-center" id="actions">
                    <form action="" method="POST" autocomplete="OFF">
                        <button type="submit" name="btnSubmit" class="btn btn-success">Adicionar Usuários</button>
                        <button type="submit" name="btnDelete" class="btn btn-danger">Deletar Usuários</button>
                        <button type="submit" name="btnID" class="btn btn-info">Zerar ID</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
      </script>
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/pace.min.js"></script>
   </body>
</html>
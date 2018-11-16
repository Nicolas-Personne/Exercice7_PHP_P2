<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <select name="check">
        <option value="true">True</option>
        <option value="false">False</option>
      </select>
      <input type="submit" name="button" value="Valider">
    </form>
    <?php
    $isOk = $_POST['check'];
    if (isset($_POST['button'])){
    if($isOk == 'false'){
      echo 'c\'est pas bon';
    }else{
      echo 'c\'est ok';
    }
  }
     ?>
  </body>
</html>

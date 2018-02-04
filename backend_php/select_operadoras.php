<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Headers: Content-Type");
  require_once 'connectdb.php';

    $query = "select * from tbl_operadoras order by id_operadora;";

    $result = mysql_query($query);
    $array = array();
    while ($rs = mysql_fetch_array($result)) {
      $objeto = array(
        "id_operadora" => $rs['id_operadora'],
        "nome_operadora" => $rs['nome_operadora'],
        "preco_operadora" => $rs['preco_operadora']
      );
      $array[] = $objeto;
    }
    $json = json_encode($array);
    echo $json;


 ?>

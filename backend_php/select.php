<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Headers: Content-Type");
  require_once 'connectdb.php';

    $query = "select c.id_contato, c.nome_contato, c.data_insercao, c.telefone_contato, o.nome_operadora, o.id_operadora from tbl_contatos as c inner join tbl_operadoras as o on c.id_operadora = o.id_operadora";

    $result = mysql_query($query);
    $array = array();
    while ($rs = mysql_fetch_array($result)) {
      $objeto = array(
        "id_contato" => $rs['id_contato'],
        "nome" => $rs['nome_contato'],
        "telefone" => $rs['telefone_contato'],
        "nome_operadora" => $rs['nome_operadora'],
        "data_insercao" => $rs['data_insercao'],
        "id_operadora" => $rs['id_operadora']

      );
      $array[] = $objeto;
    }
    $json = json_encode($array);
    echo $json;


 ?>

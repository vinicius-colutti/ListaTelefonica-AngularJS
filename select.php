<?php
//database settings
include "connectdb.php";

$query="select c.nome_contato, c.telefone_contato, o.nome_operadora from tbl_contatos as c inner join tbl_operadoras as o on c.id_operadora = o.id_operadora;";
//$data = array();
$rs=$dbhandle->query($query);

while ($row = $rs->fetch_array()) {
  $data[] = $row;
}

	//print_r($data);
    
    print json_encode($data);
?>



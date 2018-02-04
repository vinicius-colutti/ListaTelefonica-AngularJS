<?php
require('config.php');

$data = json_decode(file_get_contents("php://input"));

$nome_contato = mysqli_real_escape_string($con, $data->nome_contato);
$telefone_contato = mysqli_real_escape_string($con, $data->telefone_contato);
$id_operadora = mysqli_real_escape_string($con, $data->id_operadora);
$data_insercao = mysqli_real_escape_string($con, $data->data_insercao);
$id_contato = mysqli_real_escape_string($con, $data->id_contato_get);


$botao = mysqli_real_escape_string($con, $data->botao);


if ($botao == "Editar"){



  $query = "update tbl_contatos set nome_contato='$nome_contato', telefone_contato='$telefone_contato', id_operadora=$id_operadora, data_insercao='$data_insercao' where id_contato =$id_contato ";

   if (mysqli_query($con, $query)) {
              echo "Data Inserted Successfully...";
          } else {
              echo 'Failed';
          }
  //nd


}else{

  $query = "INSERT INTO tbl_contatos(nome_contato, telefone_contato, id_operadora, data_insercao) VALUES ('$nome_contato', '$telefone_contato', '$id_operadora', '$data_insercao')";

   if (mysqli_query($con, $query)) {
              echo "Data Inserted Successfully...";
          } else {
              echo 'Failed';
          }


}




?>

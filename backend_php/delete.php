<?php  

include "config.php";
$data=json_decode(file_get_contents("php://input"));
$id = mysqli_real_escape_string($con, $data->id_contato_get);

$query="DELETE FROM tbl_contatos WHERE id_contato=".$id;

 if (mysqli_query($con, $query)) {
              echo "delete";
          } else {
              echo 'Failed';
          }

 ?>
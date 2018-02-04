
<?php
$conn = mysqli_connect("localhost", "root", "bcd127", "db_lista_telefonica");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $nome_contato     = mysqli_real_escape_string($conn, $info->nome_contato);
    $telefone_contato    = mysqli_real_escape_string($conn, $info->telefone_contato);
    $id_operadora      = mysqli_real_escape_string($conn, $info->id_operadora);
    $data_insercao      = mysqli_real_escape_string($conn, $info->data_insercao);
    if ($btn_name == "Adicionar Contatos") {
        $query = "INSERT INTO tbl_contatos(nome_contato, telefone_contato, id_operadora) VALUES ('$nome_contato', '$telefone_contato', '$id_operadora', '$data_insercao')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $id    = $info->id;
        $query = "UPDATE insert_emp_info SET name = '$name', email = '$email', age = '$age' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>

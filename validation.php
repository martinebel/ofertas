<?php
require 'db.php';
$sql = "select * from vendedores where documento=? and vendclave=? and activo=1";
$stmt = sqlsrv_prepare( $conn, $sql, array( &$_POST['dni'], &$_POST['password']));
sqlsrv_execute( $stmt );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {


 $_SESSION['idusuario'] = $row['VendCodigo'];
$_SESSION['nombreusuario'] = $row['VendNombre'];
$_SESSION['tipousuario'] = $row['usuario'];
header('Location: dashboard.php');
exit(0);
}
header('Location: index.php?e=1');
sqlsrv_free_stmt( $stmt);
?>

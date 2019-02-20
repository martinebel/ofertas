<?php
require '../../db.php';
$array=array();

//objetivos
$stmt = sqlsrv_query( $conn, "select * from objetivosNuevos where idsucursal=".$idSucursal );
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	$objetivo = $row["objetivo"];
	$objetivomayo = $row["estimado"];
	$diaslaboral = $row["diaslaboral"];
}

//totalmes MINORISTA
$stmt2 = sqlsrv_query( $conn, "select sum(ventas.factotal) as total from clientes inner join ventas on ventas.CliCodigo=clientes.CliCodigo where clientes.CliTipoCliente <> 'MAYORISTAS' and (facfecha>='".date("Y-m")."-01' and facfecha<='".date("Y-m-t")."')");
while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) {
$totalmes=ceil($row2['total']);
}
//MAYORISTA mensual
$stmt2 = sqlsrv_query( $conn, "select sum(ventas.factotal) as total  from clientes inner join ventas on ventas.CliCodigo=clientes.CliCodigo where clientes.CliTipoCliente like 'MAYORISTA%' and (facfecha>='".date("Y-m")."-01' and facfecha<='".date("Y-m-t")."')");
while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) {
$mayorista=ceil($row2['total']);
}
$actualmayo=ceil(($mayorista * 100) / $objetivomayo);
$actualmino=ceil(($totalmes * 100) / $objetivo);


//POR vendedor
//totalmes MINORISTA

$stmt2 = sqlsrv_query( $conn, "select sum(ventas.factotal) as total from clientes inner join ventas on ventas.CliCodigo=clientes.CliCodigo where clientes.CliTipoCliente <> 'MAYORISTAS' and (facfecha>='".date("Y-m")."-01' and facfecha<='".date("Y-m-t")."') and ventas.vendcodigo=".$_REQUEST["vendedor"]);
while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) {
$vtotalmes=ceil($row2['total']);
}
//MAYORISTA mensual
$stmt2 = sqlsrv_query( $conn, "select sum(ventas.factotal) as total  from clientes inner join ventas on ventas.CliCodigo=clientes.CliCodigo where clientes.CliTipoCliente like 'MAYORISTA%' and (facfecha>='".date("Y-m")."-01' and ventas.facfecha<='".date("Y-m-t")."') and ventas.vendcodigo=".$_REQUEST["vendedor"]);
while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) {
$vmayorista=ceil($row2['total']);
}
$vendedoractualmayo=ceil(($vmayorista * 100) / $objetivomayo);
$vendedoractualmino=ceil(($vtotalmes * 100) / $objetivo);

array_push($array,array(
"minorista"=> $actualmino,
		"mayorista"=> $actualmayo,
		"vendedorMinorista"=>$vendedoractualmino,
		"vendedorMayorista"=>$vendedoractualmayo));
    echo json_encode($array);
 ?>

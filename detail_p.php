<?php
include 'header.php';
 ?>


                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">

                                    </div>
                                    <h4 class="page-title"></h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-5">
                                    <!-- Product image -->
                                    <?php
                                    $stmt = sqlsrv_query( $conn, "select imagenes_temp.id_imagen from imagenes_temp where id_producto=".$_REQUEST['id']);
                                    $contador=0;
                                    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                      $imagen='';
                                      $idimg='0';
                                      if(!is_null($row['id_imagen']))
                                      {
                                        $idimg=(string)$row['id_imagen'];
                                        $imagen='https://ryrcomputacion.com/img/p/';
                                        for ($i = 0; $i < strlen($idimg); $i++){
                                          $imagen.=$idimg[$i].'/';
                                        }
                                        $imagen.=$idimg;
                                      }
                                      else {
                                        $imagen='assets/images/logo.jpg';
                                        $idimg='0asd';
                                      }
                                      if($contador==0){
                                      echo '<a href="javascript: void(0);" class="text-center d-block mb-4">
                                        <img src="'.$imagen.'-home_default.jpg" class="img-fluid" id="imgPreview" style="max-width: 280px;" alt="Product-img">
                                      </a>
                                      <div class="d-lg-flex d-none justify-content-center">
                                      <a href="javascript: void(0);" class="showImage" data-imagen="'.$idimg.'">
                                        <img src="'.$imagen.'-small_default.jpg"  class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                      </a>';
                                    }
                                    else {
                                      echo '<a href="javascript: void(0);" class="showImage" data-imagen="'.$idimg.'">
                                        <img src="'.$imagen.'-small_default.jpg" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                      </a>';
                                    }
                                    $contador++;
                                    }
                                    if($contador==0){
                                    echo '<a href="javascript: void(0);" class="text-center d-block mb-4">
                                      <img src="assets/images/logo.jpg" class="img-fluid"  style="max-width: 280px;" alt="Product-img">
                                    </a>
                                    <div class="d-lg-flex d-none justify-content-center">
                                    <a href="javascript: void(0);" >
                                      <img src="assets/images/logo.jpg"  class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                    </a>';
                                  }
                                    echo '</div>'
                                     ?>

                                  </div> <!-- end col -->
                                  <div class="col-lg-7">
                                    <form class="pl-lg-4">
                                      <!-- Product title -->
                                      <?php
                                      //datos del producto
                                      $stmt = sqlsrv_query( $conn, "select productos.procodigo,productos.prodescripcion,productos.descripcion,productos.prostockactual,compras.comfecha,(select top 1 imagenes_temp.id_imagen from imagenes_temp where id_producto=productos.procodigo) as imagen,proveedores.provrazonsocial from compras inner join detallecompras on detallecompras.comcodigo=compras.comcodigo inner join productos on productos.procodigo=detallecompras.procodigo inner join proveedores on proveedores.provcodigo=compras.provcodigo where probaja=0 and productos.procodigo=".$_REQUEST["id"]);

                                      while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                        $nombre=$row["prodescripcion"];
                                        $stock=$row["prostockactual"];
                                      $proveedor=$row["provrazonsocial"];
                                        $fecha=$row['comfecha']->format('d/m/Y');
                                        $search=array('á','é','í','ó','ú','Á','É','Í','Ó','Ú','ñ','Ñ','©','º','°','ª','™','–','®');
									  $replace=array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','&ntilde;','&Ntilde;','&copy;','&ordm;','&ordm;','&ordf;','&#153;','&#151;','&reg;');
                                        $descripcion=str_replace($search,$replace,$row["descripcion"]);
                                      }

                                      //precios
                                      $stmt2 = sqlsrv_query( $conn, "select productolista.importe,productolista.idlista,listaprecio.Nombre from productolista inner join listaprecio on listaprecio.idlista=productolista.IdLista where productolista.IdLista=1 and idproducto=".$_REQUEST['id']);

                                      while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) {

                                        $precio=$row2["importe"];

                                      }
                                       ?>
                                      <h3 class="mt-0"><?php echo $nombre;?> </h3>
                                      <p class="mb-1">Pedido <?php echo $fecha;?></p>
                                      <p class="mb-1">Proveedor <?php echo $proveedor;?></p>
                                      <!-- Product stock -->
                                      <div class="mt-3">
                                        <h4><span class="badge badge-success-lighten"><?php echo $stock;?> unidades disponibles</span></h4>
                                      </div>

                                      <!-- Product description -->
                                      <div class="mt-4">
                                        <h6 class="font-14">Precio Contado:</h6>
                                        <h3> $<?php echo ceil($precio);?></h3>
                                      </div>

                                      <!-- Product description -->
                                      <div class="mt-4">
                                        <h6 class="font-14">Descripcion</h6>
                                        <p><?php echo $descripcion;?></p>
                                      </div>

                                    </form>
                                  </div> <!-- end col -->
                                </div> <!-- end row-->

                                <div class="table-responsive mt-4">
                                  <!-- Product information -->

                                  <table class="table table-bordered table-centered mb-0">
                                    <thead class="thead-light">
                                      <tr>
                                        <th>Lista</th>
                                        <th>Precio</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $stmt2 = sqlsrv_query( $conn, "select productolista.importe,productolista.idlista,listaprecio.Nombre from productolista inner join listaprecio on listaprecio.idlista=productolista.IdLista where (FechaDesde<=getdate() and fechahasta>=getdate()) and idproducto=".$_REQUEST['id']);
                                      while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) {
                                        echo '<tr>
                                          <td>'.$row2["Nombre"].'</td>
                                          <td>$'.ceil($row2["importe"]).'</td>

                                        </tr>';
                                      }
                                       ?>

                                    </tbody>
                                  </table>
                                </div> <!-- end table-responsive-->

                              </div> <!-- end card-body-->
                            </div> <!-- end card-->
                          </div>
                        </div>
                        <!-- end row -->


                    </div>
                    <!-- container -->

                </div>
                <!-- content -->


<?php
include 'footer.php';
 ?>
 <script>
 $(document).on('click','.showImage',function(){
   imagen='https://ryrcomputacion.com/img/p/';
   var prod=$(this).data("imagen").toString();
   for(var j=0;j<prod.length;j++)
   {
     imagen+=prod.charAt(j)+'/';
   }
   imagen+=prod+'-home_default.jpg';
   $("#imgPreview").attr("src",imagen);
 });
 </script>

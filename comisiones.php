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
                                    <h4 class="page-title">Comisiones</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                          <div class="table-responsive">
                            <table class="table table-centered  table-sm table-striped mb-0" id="data-table">
                              <thead><th></th><th></th>
                              </thead>
                              <tbody>

                                  <?php
                                  $stmt = sqlsrv_query( $conn, "select Publicaciones.*,productos.prodescripcion,productos.prostockactual,(select top 1 imagenes_temp.id_imagen from imagenes_temp where id_producto=publicaciones.procodigo) as imagen from Publicaciones inner join productos on productos.procodigo=publicaciones.procodigo where tipo=3");

                                  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                    $imagen='';
                                    if(!is_null($row['imagen']))
                                    {
                                      $idimg=(string)$row['imagen'];
                                      $imagen='https://ryrcomputacion.com/img/p/';
                                      for ($i = 0; $i < strlen($idimg); $i++){
                                        $imagen.=$idimg[$i].'/';
                                      }
                                      $imagen.=$idimg.'-cart_default.jpg';
                                    }
                                    else {
                                      $imagen='assets/images/logo.jpg';
                                    }
                                  	echo '<tr><td><img class="card-img-top" src="'.$imagen.'"></td><td><a href="detail.php?id='.$row['procodigo'].'">'.$row['prodescripcion'].'</a></td></tr>';

                                  }
                                  echo '</tbody></table></div>'
                                   ?>

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

</script>

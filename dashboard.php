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
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
<input type="hidden" id="idvendedor" value="<?php echo $_SESSION["idusuario"];?>">

                          <div class="col-6">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" >Minorista</h5>
                                <div class="row align-items-center">
                                  <div class="col-6">
                                  <div id="objetivoMinorista"></div>
                                </div>
                                <div class="col-6">
                                <div id="misventasMinorista"></div>
                              </div>
                                </div> <!-- end row-->
                              </div> <!-- end card-body -->
                            </div> <!-- end card -->
                          </div>

                          <div class="col-6">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" >Mayorista</h5>
                                <div class="row align-items-center">
                                  <div class="col-6">
                                  <div id="objetivoMayorista"></div>
                                </div>
                                <div class="col-6">
                              <div id="misventasMayorista"></div>
                              </div>
                                </div> <!-- end row-->
                              </div> <!-- end card-body -->
                            </div> <!-- end card -->
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
 <script src="assets/js/dashboard.js"></script>
<script>

</script>

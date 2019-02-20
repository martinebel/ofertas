
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>RyR Computacion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary" style="padding-top:1.25rem!important;padding-bottom:1.25rem!important;">
                                <a href="index.html">
                                    <span><img src="assets/images/logo.jpg" alt="" height="55"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Iniciar Sesion</h4>
                                    <?php
                                    if(isset($_REQUEST['e']))
                                    {
                                      echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error </strong> Compruebe los datos ingresados
                                        </div>';
                                    }
                                     ?>
                                </div>

                                <form action="validation.php" method="post">

                                    <div class="form-group">
                                        <label for="dni">DNI</label>
                                        <input class="form-control" type="password" id="dni" name="dni" required="" placeholder="Numero de Documento">
                                    </div>

                                    <div class="form-group">

                                        <label for="password">Clave</label>
                                        <input class="form-control" type="password" required="" name="password" id="password" placeholder="Clave">
                                    </div>



                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Iniciar Sesion </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->


                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            © RyR Computacion
        </footer>


    </body>
</html>

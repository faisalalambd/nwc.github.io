<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sign Up Form</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>


<body>

    <div class="loader"></div>

    <div id="app">

        <section class="section">

            <div class="container mt-5">

                <div class="row">

                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <h4>
                                        <?php if ($text == " ") {
                                            $text = "Login";
                                        } ?>
                                    </h4>
                                    <br>
                                    <h4><?php echo $text ?></h4>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

                        <div class="card card-primary">

                            <div class="card-header">
                                <h4>Register</h4>
                            </div>


                            <div class="card-body">

                                <form action="registration_store.php" method="POST">

                                    <div class="row">

                                        <div class="form-group col-6">
                                            <label for="full_name">Full Name</label>
                                            <input id="full_name" type="text" class="form-control" name="name" autofocus>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="contact_number">Contact Number</label>
                                            <input id="contact_number" type="text" class="form-control" name="contact" autofocus>
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="address">Address</label>
                                            <textarea id="address" class="form-control" name="address" autofocus></textarea>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                            <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>

                                </form>

                            </div>


                            <div class="mb-4 text-muted text-center">
                                Already Registered? <a href="index.php">Login</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>


    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/auth-register.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
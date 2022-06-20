<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Luwe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assetcontact/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assetcontact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assetcontact/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assetcontact/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assetcontact/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assetcontact/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assetcontact/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="<?= base_url() ?>/assetcontact/images/img-01.png" alt="IMG">
            </div>

            <form class="contact1-form validate-form">
                <span class="contact1-form-title">
                    Formulir Warung
                </span>

                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input class="input1" type="text" name="nama" placeholder="Nama Warung">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="menu" placeholder="Menu Makanan">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Message is required">
                    <textarea class="input1" name="caption" placeholder="Caption Menu"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container">
                    <div class="mb-5">
                        <label for="Image" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="formFile" onchange="preview()">
                    </div>
                    <img id="frame" src="" class="img-fluid" />
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn">
                        <span>
                            Submit Request
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/assetcontact/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/assetcontact/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>/assetcontact/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/assetcontact/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/assetcontact/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/assetcontact/js/main.js"></script>

</body>

</html>
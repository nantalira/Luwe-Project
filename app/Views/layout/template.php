<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styleshet.css">
    <title>Luwe Home Page</title>
</head>

<body id="spinner">
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- JavaScript Bundle with Popper End -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script>
    var spinner = document.getElementById("spinner");
    window.addEventListener("load", function() {
        spinner.classList.add("loaded");
    });
    </script>

    <script>
    //get location js
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }

    //set location name https://nominatim.openstreetmap.org/reverse?format=jsonv2
    function showPosition(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        var endpoint = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=" + lat + "&lon=" + lon;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', endpoint, true);
        xhr.onload = function() {
            if (this.status == 200) {
                var data = JSON.parse(this.response);
                console.log(data);
                document.getElementById("lokasi").innerHTML = data.address.city;
            }
        };
        xhr.send();
    }
    </script>
</body>

</html>
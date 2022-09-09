<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Boostrap 4 CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- Boostrap JS -->
    <script src="https://jacoblett.github.io/bootstrap4-latest/bootstrap-4-latest.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Luxetribe</title>

</head>

<body>
    @include('includes.navbar')

    <div class="container">
        @yield('content')
    </div>
    @include('sweetalert::alert')
    <script src="js/intlTelInput.js"></script>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };

        $(function() {

            // INITIALIZE DATEPICKER PLUGIN
            $('.datepicker').datepicker({
                clearBtn: true,
                format: "dd/mm/yyyy"
            });


            // FOR DEMO PURPOSE
            $('#reservationDate').on('change', function() {
                var pickedDate = $('input').val();
                $('#pickedDate').html(pickedDate);
            });
        });


        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            utilsScript: "js/utils.js",
        });
    </script>

</body>

</html>

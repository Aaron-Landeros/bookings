<!DOCTYPE html>
<html lang="en" id="theme-change" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../utilities/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../utilities/sweetalert2/sweetalert2.min.css">
</head>


<body class="container d-flex flex-column p-0">
    <div class="">
    <?php
        include "components/navigation_bar_view.php"
    ?>
    </div>
<div class="" id="main-content">
    <?php
        include "Appointments/Appointment_index_view.php"
    ?>
</div>

    <div class="" id="modal-placeholder"></div>

  </div>
</div>


    <script src="../utilities/js/jquery.js"></script>
    <script src="../utilities//bootstrap/bootstrap.min.js"></script>
    <script src="../utilities/fontawesome/all.min.js"></script>
    <script src="../utilities/sweetalert2/sweetalert2.min.js"></script>
    <script src="../utilities/evo-calendar/js/evo-calendar.js"></script>
    <script src="../utilities/Chart.js/chart.umd.js"></script>
    <script src="../utilities/Print.js/print.min.js"></script>

    <script src="./js/index_event_controller.js"></script>
    <script src="Appointments/js/appointment_event_controller.js"></script>
    <script src="Serv/js/service_event_controller.js"></script>
    <script src="Profile/js/profile_event_controller.js"></script>
</body>
</html>
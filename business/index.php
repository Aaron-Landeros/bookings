<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/ecn_ico.svg" type="image/x-icon">
    <link rel="stylesheet" href="../utilities/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../utilities/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" type="text/css" href="../utilities/evo-calendar/css/evo-calendar.css"/>
    <link rel="stylesheet" href="../utilities/evo-calendar/css/evo-calendar.royal-navy.css">
    <link rel="stylesheet" href="../utilities/Print.js/print.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include 'components/header.php' ?>

            <div class="col p-4" id="main_content_container">
                <?php include 'services/services.php' ?>
            </div>
        </div>
        <div id="receipt-modal"></div>
        <div id="modal_container"></div>
        <div id="toast_container"></div>
        
        <?php include 'components/footer.php' ?>
    </div>

    <script src="../utilities/js/jquery.js"></script>
    <script src="../utilities/bootstrap/bootstrap.min.js"></script>
    <script src="../utilities/sweetalert2/sweetalert2.min.js"></script>
    <script src="../utilities/fontawesome/all.min.js"></script>
    <script src="../utilities/evo-calendar/js/evo-calendar.js"></script>
    <script src="../utilities/Chart.js/chart.umd.js"></script>
    <script src="../utilities/Print.js/print.min.js"></script>

   
</body>
</html>
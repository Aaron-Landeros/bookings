<?php
// var_dump($_POST);
// exit;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_request = filter_input(INPUT_POST, 'user_request');
} else {
    $user_request = filter_input(INPUT_GET, 'user_request');
    
}

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if ($errno === E_WARNING) {
        // Convert warning to an exception
        throw new ErrorException("Warning: $errstr in $errfile on line $errline", 0, $errno, $errfile, $errline);
    }
    // For other error types, use the default handler
    return false;
});

switch ($user_request) {
    case 'fetch_page':
        try{
            include '../../utilities/db_conn.php';
            $db = new PDO($dsn, $username, $password);
            $select_page = filter_input(INPUT_POST, 'nav_to_page');
            
            // $user_appointment = fetch_user_appoinments($db);
                $content = '';
                ob_start();
                switch ($select_page){
                    case "appointments":
                        include '../Appointments/Appointment_index_view.php';
                        break;
                    case "profiles":
                        include '../Profile/profile_index_view.php';
                        break;
                    case "services":
                        include '../Serv/Service_index_view.php';
                        break;
                    case "account":
                        include '../Account/account_index_view.php';
                        break;
                    }
                $content = ob_get_clean();
                    // header('Content-Type: application/json');
                echo json_encode(['status' => 'success', 'view' =>  $content]);
            } catch (PDOException $e) {
                //? Ocurre cuando hay un error en la base datos o en el modelo
                error_log('Database Error: ' . $e->getMessage());
                $message = $development_mode ? 'Database error occurred: ' . $e->getMessage() : $user_message;
                echo json_encode(['status' => 'error', 'message' => $message]);
            } catch (ErrorException $e) {
                //? Ocurre cuando convertimos un Warning a excepción, normal mente estos warnings php los ignora
                error_log('Warning converted to Exception: ' . $e->getMessage());
                $message = $development_mode ? $e->getMessage() : $user_message;
                echo json_encode(['status' => 'error', 'message' => $message]);
            } catch (Exception $e) {
                //? Ocurre cuando hay un error fatal 
                error_log('Error: ' . $e->getMessage());
                $message = $development_mode ?  $e->getMessage() : $user_message;
                echo json_encode(['status' => 'error', 'message' => $message]);
            }

        break;
        }
?>
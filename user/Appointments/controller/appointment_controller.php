<?php

// var_dump($_POST);
// exit;
// require "../model/appointment_queries.php";

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
    case 'fetch_all_appointments':
        try{
                //? incluir la conexión a la base de datos
                include '../../../utilities/db_conn.php';
                //? crear el objeto PDO
                $db = new PDO($dsn, $username, $password);
                // $user_appointment = fetch_user_appoinments($db);
                $content = '';
                ob_start();
                    for ($i=0; $i < 10 ; $i++) { 
                        $appointment_status = 'Complete';
                        $bg = '';

                        include '../components/card/appointment_card.php';
                    }
                $content = ob_get_clean();

                echo json_encode(['status' => 'success', 'view' => $content,]);
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
        case 'select_appointment':
            try{
            //? incluir la conexión a la base de datos
            include '../../../utilities/db_conn.php';
             //? crear el objeto PDO
                $db = new PDO($dsn, $username, $password);
            // $select_id = filter_input(INPUT_POST, 'select_id', FILTER_SANITIZE_NUMBER_INT);
            // $contact = load_contact_select($db, $select_id); 

            //! Generar la vista
            $content = '';
            ob_start();
            // $contact_id = $contact['contact_id'];
            // $contact_fullname = $contact['contact_fullname'];
            // $contact_mobile = $contact['contact_mobile'];
            // $contact_email = $contact['contact_email'];
            // $contact_company = $contact['contact_company'];
            include  "../components/modal/appointment_modal.php";
            $content = ob_get_clean();

            //? Hacer eco para manejar en javascript
            echo json_encode(['status' => 'success', 'view' => $content]); //'variable_data' => $contact]
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
    
    default:
        # code...
        break;
}
<?php
   
    
    switch($appointment_status){
        case 'Complete':
            $bg = 'bg-success text-light';
        break;
        case 'Canceled':
            $bg = 'bg-warning';
        break;
        case 'Upcoming':
            $bg = 'bg-success';
        break;
    }
?>


<div class="card  mb-3">
    <div id="appointment-card" data-appointment-id="" class="card-body">
        <div
        class="row justify-content-center align-items-center p-0"
        >
        <div class="col-5">
            <h5 class="card-title fw-bold">Client Name</h5>
            <div>Service</div>
            <div>Date</div>
            <div>Time</div>
        </div>

        <div class="col-7 py-4"><button class="btn btn-lg <?= $bg ?> w-100" type="button"><?= $appointment_status ?> </button></div>
        </div>
    </div>
</div>
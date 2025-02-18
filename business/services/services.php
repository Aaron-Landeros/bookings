<div class="container mt-5 pt-5">
    <div class="row mb-4">
        <div class="col-12 text-container">
            <h3>
                <strong>Service</strong> in <strong>Location</strong>
            </h3>
        </div>
    </div>

    <!-- ROW1 -->
    <div class="row mb-5 d-flex justify-content-between">
        <?php
            for($i=0; $i < 12; $i++){
                include 'components/card/card_services.php';
            }
        ?>
    </div>
</div>
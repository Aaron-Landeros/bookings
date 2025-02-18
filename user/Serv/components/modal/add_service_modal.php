  <div
        class="modal fade"
        id="modalId"
        tabindex="-1"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-fullscreen"
          role="document"
        >
          <div class="modal-content">
            <!-- Include navigation to the modal -->
            <div class="navigation">
            <?php
                include "../../../business/components/navigation_bar_view.php";
            ?>
            </div>
           
           <div class="modal-header row p-3 text-center">
              <div class="col-2" data-bs-dismiss="modal" aria-label="Close">
                Cancel
              </div>
              <div class="col-8 display-5 fw-bold">Add Service</div>
              <div class="col-2">Save</div>
            </div>
            <div class="modal-body">
              <form action="" method="post"></form>
              <h5 class="fw-bold">Service Name</h5>
              <input type="text" class=" mb-4 input-group input-group-sm" disabled></input>

              <h5 class="fw-bold">Service Description</h5>
              <textarea type="" class=" mb-4 form-control" rows="3" disabled></textarea>

              <h5 class="fw-bold">Service Cost</h5>
              <input type="text" class="mb-4  input-group input-group-sm" disabled placeholder="10.00"></input>

 
              
            </div>
          </div>
        </div>
      </div>

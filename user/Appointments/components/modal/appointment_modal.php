  <div
        class="modal fade"
        id="appointment-modal"
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
                Back
              </div>
              <div class="col-8 display-5 fw-bold">Appointment</div>
              <div class="col-2">Update</div>
            </div>
            <div class="modal-body">
              <h5 class="fw-bold">Client Name</h5>
              <h4 class="ms-3 fs-5">John Doe</h4>
              <h5 class="fw-bold">Service</h5>
              <h4 class="ms-3 fs-5">Haircut</h4>
              <h5 class="fw-bold">Date</h5>
              <div class="ms-3" ><input type="date" /></div>
              <h5 class="fw-bold">Time</h5>
              <div class="ms-3" ><input type="time" /></div>
              <h5 class="fw-bold">Status</h5>
              <div class="ms-3">
                <div class="mb-3">
                  <select class="form-select form-select-sm" name="" id="">
                    <option value="">Upcoming</option>
                    <option value="">Canceled</option>
                    <option value="">Complete</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

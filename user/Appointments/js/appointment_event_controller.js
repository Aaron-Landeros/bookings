$appointmentController = "Appointments/controller/appointment_controller.php";

function load_appointment_list() {
  $.post(
    $appointmentController,
    { user_request: "fetch_all_appointments" },
    function (data) {
      // console.log("Raw Response:", data);
      var response = JSON.parse(data);
      if (response.status == "success") {
        // console.log(response.view);
        $("#cardholder-content").html(response.view);
      } else {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: response.message,
        });
      }
    }
  );
}

$(document).ready(function () {
  //Loads current appointments
  load_appointment_list();
});

//Gets Selected contact data and inserts it into modal
$(document).on("click", "#appointment-card", function () {
  // var select_id = $(this).find("p").data("appointment-id");
  console.log("click-appo");

  $.post(
    $appointmentController,
    { user_request: "select_appointment" },
    // , select_id: select_id
    function (data) {
      // console.log("Selected Modal Shown: " + data);
      var response = JSON.parse(data);
      if (response.status == "success") {
        $("#modal-placeholder").html(response.view);
        $("#appointment-modal").modal("show");
      } else {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: response.message,
        });
      }
    }
  );
});

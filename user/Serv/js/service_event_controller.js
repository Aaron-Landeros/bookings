$serviceController = "Serv/controller/service_controller.php";

function load_service_list() {
  $.post(
    $serviceController,
    { user_request: "fetch_all_service" },
    function (data) {
      // console.log("Raw Response:", data);
      var response = JSON.parse(data);
      if (response.status == "success") {
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
  //Gets Selected contact data and inserts it into modal
  $(document).on("click", "#service-card", function () {
    console.log("Service card click");
    $.post(
      $serviceController,
      { user_request: "load_select_service" },
      // , select_id: select_id
      function (data) {
        var response = JSON.parse(data);
        // console.log(data);

        // console.log("Selected Modal Shown: " + response.status);
        if (response.status == "success") {
          $("#modal-placeholder").html(response.view);
          $("#modalId").modal("show");
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
  $(document).on("click", "#add-service-btn", function () {
    console.log("Add Service card click");
    $.post(
      $serviceController,
      { user_request: "add_service" },
      // , select_id: select_id
      function (data) {
        var response = JSON.parse(data);
        console.log(data);

        // console.log("Selected Modal Shown: " + response.status);
        if (response.status == "success") {
          $("#modal-placeholder").html(response.view);
          $("#modalId").modal("show");
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
});

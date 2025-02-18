$indexController =
  "../../../booking site/business/controller/index_controller.php";

function navigateTo(page) {
  $.post(
    $indexController,
    { user_request: "fetch_page", nav_to_page: page },
    function (data) {
      //   console.log("Raw Response:", data);
      $("#offcanvasExample").offcanvas("hide");
      var response = JSON.parse(data);
      //   console.log(response);
      if (response.status == "success") {
        // console.log(response.view);
        $("#main-content").html(response.view);
      } else {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: response.message,
        });
      }

      switch (page) {
        case "appointments":
          load_appointment_list();
          break;
        case "services":
          load_service_list();
          break;

        default:
          break;
      }
    }
  );
}

$(document).on("click", "#nav-btn-appointment", function () {
  navigateTo("appointments");
  console.log(" click on appointments");
});
$(document).on("click", "#nav-btn-profile", function () {
  navigateTo("profiles");
  console.log(" click on profiles");
});
$(document).on("click", "#nav-btn-services", function () {
  navigateTo("services");
  console.log(" click on services");
});
$(document).on("click", "#nav-btn-account", function () {
  navigateTo("account");
  console.log(" click on account");
});

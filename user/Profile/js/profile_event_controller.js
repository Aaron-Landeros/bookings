$(document).ready(function () {
  $profileController = "Profile/controller/profile_controller.php";

  $(document).on("click", "#profile-edit-btn", function () {
    console.log("Edit Click");
    $("#profile-edit-btn").hide();
    $("#profile-upload-btn").show();
    $("#profile-page .view-mode").hide();
    $("#profile-page .edit-mode").show();
  });

  $(document).on("click", "#profile-upload-btn", function () {
    console.log("Edit Click");
    $("#profile-edit-btn").show();
    $("#profile-upload-btn").hide();
    $("#profile-page .view-mode").show();
    $("#profile-page .edit-mode").hide();
  });
});

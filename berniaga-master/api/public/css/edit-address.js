$(document).ready(function () {
  $(".edit-address-btn").click(function (e) {
    e.preventDefault();
    $("#address-edit").removeClass("active show");
    $("#address-edit-form").addClass("active show");
  });
});

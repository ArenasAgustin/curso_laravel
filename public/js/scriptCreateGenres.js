$("#register").click(function () {
  let data = $("#genre").val();
  let route = "/genre";
  let token = $("#token").val();

  $.ajax({
    url: route,
    headers: { "X-CSRF-TOKEN": token },
    type: "POST",
    dataType: "json",
    data: { genre: data },

    success: function () {
      $("#msj-success").fadeIn();
    },
  });
});

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
      $("#msg-success").fadeIn();
    },

    error: function (msg) {
      $("#msg-txt").html(msg.responseJSON.genre);
      console.log(msg.responseJSON.genre);
      console.log($("#msg-txt"));
      $("#msg-error").fadeIn();
    },
  });
});

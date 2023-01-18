$(document).ready(function () {
  Loading();
});

function Loading() {
  var tablaDatos = $("#data");
  var route = "http://localhost:8000/genre";

  $("#data").empty();
  $.get(route, function (res) {
    $(res).each(function (_, value) {
      tablaDatos.append(
        `<tr><td>${value.genre}</td><td><button value=${value.id} OnClick='ShowModal(this);' class='btn btn-primary' data-toggle='modal' data-target='#modalGenre'>Update</button><button class='btn btn-danger' value=${value.id} OnClick='Delete(this);'>Delete</button></td></tr>`
      );
    });
  });
}

function ShowModal(btn) {
  let route = `http://localhost:8000/genre/${btn.value}/edit`;

  $.get(route, function (res) {
    $("#genre").val(res.genre);
    $("#id").val(res.id);
  });
}

$("#update").click(function () {
  let value = $("#id").val();
  let data = $("#genre").val();
  let route = `http://localhost:8000/genre/${value}`;
  let token = $("#token").val();

  $.ajax({
    url: route,
    headers: { "X-CSRF-TOKEN": token },
    type: "PUT",
    dataType: "json",
    data: { genre: data },
    success: function () {
      Carga();
      $("#modalGenre").modal("toggle");
      $("#msj-success").fadeIn();
    },
  });
});

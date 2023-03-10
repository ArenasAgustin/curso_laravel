$(document).ready(function () {
  Loading();
});

function Loading() {
  var tablaDatos = $("#data");
  var route = "/genre";

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
  let route = `/genre/${btn.value}/edit`;

  $.get(route, function (res) {
    $("#genre").val(res.genre);
    $("#id").val(res.id);
  });
}

function Delete(btn){
  let route = `/genre/${btn.value}`;
  let token = $("#token").val();

  $.ajax({
    url: route,
    headers: { "X-CSRF-TOKEN": token },
    type: "DELETE",
    dataType: "json",
    success: function () {
      Loading();
      $("#msj-success").fadeIn();
    },
  });
}

$("#update").click(function () {
  let value = $("#id").val();
  let data = $("#genre").val();
  let route = `/genre/${value}`;
  let token = $("#token").val();

  $.ajax({
    url: route,
    headers: { "X-CSRF-TOKEN": token },
    type: "PUT",
    dataType: "json",
    data: { genre: data },
    success: function () {
      Loading();
      $("#modalGenre").modal("toggle");
      $("#msj-success").fadeIn();
    },
  });
});

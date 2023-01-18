$(document).ready(function () {
  let dataTable = $("#data");
  let route = "/genres";

  $get(route, function(res){
    $(res).each(function(key,value){
        dataTable.append('<tr><td>'+value.genre+'</td><td><button class="btn btn-primary">Edit</button><button class="btn btn-danger">Delete</button></td></tr>')
    })
  })
});

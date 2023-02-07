$(document).on('click', 'pagination a', function(e){
    e.preventDefault();
    let page = $(this).attr('href').split('page=')[1];
    let route = "/genre";
})
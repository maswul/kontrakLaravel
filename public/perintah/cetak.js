$(function(){


    $("#data-tables").DataTable({
        "responsive": true,
        "autoWidth": false,
    });

    $('[data-toggle="tooltip"]').tooltip();



    $('body').on("click", "#alink", function (e) {
        e.preventDefault();
        window.location.href = $(this).attr('href');
    });

});

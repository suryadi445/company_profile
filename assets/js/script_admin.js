$(document).ready(function(){
    // date picker
    $(".datepicker").datepicker({
        dateFormat:"yy-mm-dd",
        autoclose: true,
        todayHighlight: true,
    })

    // manipulasi text pada input file gambar bootstrap
    $('.custom-file-input').on('change', function(){
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName)
    });

    // datatable
    $('#table').dataTable({
        "processing": true, 
        // "searching": false, 
        "ordering": false,
        "lengthChange": false,
        "bFilter": true,
        "bInfo": false,
    });

    // halaman yg ada uploadnya
    // gambar preview pada input file gambar
    gambar.onchange = evt => {
        const [file] = gambar.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
})
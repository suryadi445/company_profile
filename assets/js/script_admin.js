$(document).ready(function(){
    // date picker
    $(".datepicker").datepicker({
        dateFormat:"yy-mm-dd",
        autoclose: true,
        todayHighlight: true,
    })

    // datatable
    $('#table').dataTable({
        "processing": true, 
        // "searching": false, 
        "ordering": false,
        "lengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "pageLength":5,
        // "paging": false
    });

    // halaman admin/tentang kami
    $('#tab-visi').show()
    $('#tab-misi').hide()
    $('#tab-sejarah').hide()

    $('#btn-visi').click(function(){
        $('#tab-visi').show()
        $('#tab-misi').hide()
        $('#tab-sejarah').hide()
    })

    $('#btn-misi').click(function(){
        $('#br').hide()
        $('#tab-visi').hide()
        $('#tab-misi').show()
        $('#tab-sejarah').hide()
    })

    $('#btn-sejarah').click(function(){
        $('#br').hide()
        $('#tab-visi').hide()
        $('#tab-misi').hide()
        $('#tab-sejarah').show()
    })


    // halaman yg ada uploadnya
    // manipulasi text pada input file gambar bootstrap
    $('.custom-file-input').on('change', function(){
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName)
    });

    // gambar preview pada input file gambar
    gambar.onchange = evt => {
        const [file] = gambar.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

    $('input , textarea, select').click(function(){
        $('.error').html('')
    })
})
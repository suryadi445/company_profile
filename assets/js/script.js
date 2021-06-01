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

// halaman admin tentang kami
$(document).ready(function(){
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

    $('#modal_karir').click(function(){

        let nama = $('#nama').val()
        let email = $('#email').val()
        let phone = $('#phone').val()
        let gender = $('input[name="gender"]:checked').val()

        $.ajax({
            url     : 'karir/insert_karir',
            type    : 'post',
            data    : {
                nama    : nama,
                email   : email,
                phone   : phone,
                gender  : gender
            },
            success: function (data) {

                let obj= $.parseJSON(data)

                if(obj == true){

                    Swal.fire({
                        icon: 'success',
                        title: 'sukses',
                        text: 'Customer berhasil ditambah',
                        showConfirmButton: false,
                        timer: 1500
                    })

                    $('#daftar_karir').modal('hide')
                    $('#nama').val('')
                    $('#email').val('')
                    $('#phone').val('')
                }
            }
        })
    })
})




















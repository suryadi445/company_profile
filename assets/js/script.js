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

    $('.show_password').click(function(){
        if($(this).is(':checked')){
            $('.password').attr('type', 'text')
        }else{
            $('.password').attr('type', 'password')
        }
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

                let error = $.parseJSON(data)
                
                if(error != true){
                    $('#error_nama').html(error.nama)
                    $('#error_email').html(error.email)
                    $('#error_phone').html(error.phone)
                } else {
                    Swal.fire({
                            icon: 'success',
                            title: 'sukses',
                            text: 'Terima kasih, pendaftaran berhasil dilakukan',
                            showConfirmButton: false,
                            timer: 2000
                        })

                    $('#daftar_karir').modal('hide')
                    $('#nama').val('')
                    $('#email').val('')
                    $('#phone').val('')
                    $('.error').hide()
                    $("#gridRadios1").prop("checked", true);                }
            }
        })
    })
})




















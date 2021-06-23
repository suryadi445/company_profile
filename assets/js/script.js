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

    // ajax pada modal halaman karir
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
                    $("#gridRadios1").prop("checked", true);
                }
            }
        })
    })

    // date time picker
    $(".datetimepicker").datetimepicker({ 
        format: 'd-m-Y H:i' 
    });

    // ajax pada modal pesan menu
    $('#pesan_menu').click(function(){
        let nama                = $('#nama').val()
        let phone               = $('#phone').val()
        let email               = $('#email').val()
        let gender              = $('input[name="gender"]:checked').val()
        let waktuPengambilan    = $('.datetimepicker').val()
        let pesan_menu          = $('#pesan_menu')
        let btn_loading         = $('#btn-loading')
        let btn_cancel          = $('.btn-cancel')
        let jumlah_menu         = $('#qty-input').val()
        let harga_total         = $('#harga_total').val()
        let menu                = $('#menu').val()

        if(nama != '' && phone != '' && email !='' && waktuPengambilan != '' ){
            pesan_menu.hide()
            btn_cancel.hide()
            btn_loading.removeClass('d-none')
        }

        $.ajax({
            url     : 'home/pesan_menu',
            type    : 'post',
            data    : {
                nama                : nama,
                phone               : phone,
                email               : email,
                gender              : gender,
                jumlah_menu         : jumlah_menu,
                harga_total         : harga_total,
                menu                : menu,
                waktuPengambilan    : waktuPengambilan
            },
            success: function(data){
                console.log(data);
                let error = $.parseJSON(data)

                if(error != true){
                    $('#error_nama').html(error.nama)
                    $('#error_phone').html(error.phone)
                    $('#error_email').html(error.email)
                    $('#error_waktu').html(error.waktuPengambilan)
                }else{
                    Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: 'Pemesanan berhasil dilakukan. Mohon datang sesuai waktu yang sudah ditentukan. Terima kasih',
                            showConfirmButton: true,
                        }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    })

                    $('#modalpesan').modal('hide')
                    $('#nama').val('')
                    $('#email').val('')
                    $('#phone').val('')
                    $('.datetimepicker').val('')
                    $('.error').hide()
                    $("#gridRadios1").prop("checked", true);
                    $('#harga_total').val('')
                    btn_loading.addClass('d-none')
                    pesan_menu.show()
                    pesan_menu.addClass('d-none')
                    btn_cancel.show()
                }
            }
        })
    })

    // ajax update quantity
    // update untuk kurang qty menu
    $('#btn-kurang').click(function(){
        let qty_input = $('#qty-input').val()

        $.ajax({
            url: 'home/kurang_qty',
            type: 'post',
            data: {
                qty_input: qty_input,
            },
            success: function (data) {
                $('#qty-input').val(data)
            }
        })
    })
    
    // update untuk tambah qty menu
    $('#btn-tambah').click(function(){
        let qty_input = $('#qty-input').val()

        $.ajax({
            url: 'home/tambah_qty',
            type: 'post',
            data: {
                qty_input: qty_input,
            },
            success: function (data) {
                $('#qty-input').val(data)
            }
        })
    })

    // hitung harga
    $('#btn-hitung').click(function(){
        
        let btn_pesan = $('#pesan_menu')
        let qty_input = $('#qty-input').val()
        let harga     = $('#harga').val()

        $.ajax({
            url: 'home/harga_total',
            type: 'post',
            data: {
                qty_input: qty_input,
                harga: harga
            },
            success: function(data){
                console.log(data);
                $('#harga_total').val(data)
                btn_pesan.removeClass('d-none')
            }
        })
    })


})




















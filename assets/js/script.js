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
                    $('.error_nama').html(error.nama)
                    $('.error_email').html(error.email)
                    $('.error_phone').html(error.phone)
                } else {
                    Swal.fire({
                            icon: 'success',
                            title: 'sukses',
                            text: 'Terima kasih, pendaftaran berhasil dilakukan',
                        })

                    $('#daftar_karir').modal('hide')
                    $('#nama').val('')
                    $('#email').val('')
                    $('#phone').val('')
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
    $('.pesan_menu').click(function(){
        let nama                = $('#nama').val()
        let phone               = $('#phone').val()
        let email               = $('#email').val()
        let gender              = $('input[name="gender"]:checked').val()
        let waktuPengambilan    = $('.datetimepicker').val()
        let pesan_menu          = $('.pesan_menu')
        let btn_loading         = $('#btn-loading')
        let btn_cancel          = $('.btn-cancel')
        let jumlah_menu         = $('.qty_input').val()
        let harga_total         = $('.harga_total').val()
        let menu                = $('.menu').val()

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
                // console.log(data);
                let error = $.parseJSON(data)

                if(error != true){
                    $('.error_nama').html(error.nama)
                    $('.error_phone').html(error.phone)
                    $('.error_email').html(error.email)
                    $('.error_waktu').html(error.waktuPengambilan)
                }else{
                    Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: 'Pemesanan berhasil dilakukan. Mohon datang sesuai waktu yang sudah ditentukan. Terima kasih',
                            showConfirmButton: true,
                        })

                    $('#modalpesan_makanan').modal('hide')
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
    $('.btn-kurang').click(function(){
        let qty_input = $('.qty_input').val()

        $.ajax({
            url: 'home/kurang_qty',
            type: 'post',
            data: {
                qty_input: qty_input,
            },
            success: function (data) {
                $('.qty_input').val(data)
                $('.harga_total').val('')
            }
        })
    })
    
    // update untuk tambah qty menu
    $('.btn-tambah').click(function(){
        let qty_input = $('.qty_input').val()

        $.ajax({
            url: 'home/tambah_qty',
            type: 'post',
            data: {
                qty_input: qty_input,
            },
            success: function (data) {
                $('.qty_input').val(data)
                $('.harga_total').val('')
            }
        })
    })

    // hitung harga
    $('.btn-hitung').click(function(){

        let btn_pesan           = $('.pesan_menu') 
        let qty_input           = $('.qty_input').val()
        let harga               = $('#harga').val()
        var nama                = $('#nama').val();
        let phone               = $('#phone').val()
        let email               = $('#email').val()
        let waktuPengambilan    = $('.datetimepicker').val()
    
        if(nama == '' && phone == '' && email =='' && waktuPengambilan == '' ){

            $.ajax({
            url: 'home/pesan_menu',
            type: 'post',
            data: {
                nama: nama,
                email: email,
                phone: phone,
                waktuPengambilan: waktuPengambilan
            },
            success: function (data) {
                var obj= $.parseJSON(data)
                $('.error_nama').html(obj.nama)
                $('.error_email').html(obj.email)
                $('.error_phone').html(obj.nama)
                $('.error_waktu').html(obj.waktuPengambilan)
            }
            })
            return false
        }
        
        if(nama != '' && phone != '' && email !='' && waktuPengambilan != '' ){
            $.ajax({
                url: 'home/harga_total',
                type: 'post',
                data: {
                    qty_input: qty_input,
                    harga: harga
                },
                success: function(data){
                    $('.harga_total').val(data)
                    btn_pesan.removeClass('d-none')
                }
            })
        }
    })

    $('input , textarea, select').click(function(){
        $('.error_nama').html('')
        $('.error_email').html('')
        $('.error_phone').html('')
        $('.error_waktu').html('')
        $('.error_kategori').html('')
        $('.error_pesan').html('')
        $('.error_password').html('')
    })

    // button cancel
    $('.btn-cancel').click(function(){
        let btn_pesan   = $('.pesan_menu')

        btn_pesan.addClass('d-none')
        $('.harga_total').val('')
        $('.qty-input').val(1)
        $('.error_nama').html('')
        $('.error_email').html('')
        $('.error_phone').html('')
        $('.error_waktu').html('')
        $('#nama').val('')
        $('#email').val('')
        $('#phone').val('')
        $('.datetimepicker').val('')
    })

    // memanggil modal pesan
    $('.buka_modal').click(function(){
        var data_menu= $(this).data('menu')
        var data_harga= $(this).data('harga')

        $("#menu").val(data_menu);
        $("#harga").val(data_harga);
    })

    $('.modal_detail').click(function(){
        var data_menu           = $(this).data('menu')
        var data_harga          = $(this).data('harga')
        var data_gambar         = $(this).data('gambar')
        var data_keterangan     = $(this).data('keterangan')
        var src                 = $('#gambar').data('src')
        var gambar_upload       = src+data_gambar
        var harga_mataUang      = parseInt(data_harga).toLocaleString()

        $("#exampleModalLabel").text(data_menu);
        $("#harga_modal").text('Rp. '+ harga_mataUang);
        $("#gambar").attr('src',gambar_upload);
        $("#keterangan_modal").text(data_keterangan);
    })

    $('#btn_hubKami').click(function(){
        let nama        = $('#nama').val()
        let email       = $('#email').val()
        let phone       = $('#phone').val()
        let kategori    = $('#kategori option:selected').val()
        let pesan       = $('#pesan').val()

        // form tidak diisi
        if(nama == '' && email == '' && phone == '' && kategori == '' && pesan == '' ){          
            $.ajax({
                url     : 'hubungi_kami/kirim_hubKami',
                type    : 'post',
                data    : {
                    nama        : nama,
                    email       : email,
                    phone       : phone,
                    kategori    : kategori,
                    pesan       : pesan
                }, 
                success: function(data){
                    console.log(data);
                    var error = $.parseJSON(data)
                    // return false

                    if(error != true){
                        $('.error_nama').html(error.nama)
                        $('.error_email').html(error.email)
                        $('.error_phone').html(error.phone)
                        $('.error_kategori').html(error.kategori)
                        $('.error_pesan').html(error.pesan)
                    } else {
                        // kosong
                    }
                }
            })
        }

        // form input sudah diisi
        if(nama != '' && email != '' && phone != '' && kategori != '' && pesan != '' ){
            $('#btn-loading').removeClass('d-none');
            $('#btn_hubKami').addClass('d-none')

            $.ajax({
                url     : 'hubungi_kami/kirim_hubKami',
                type    : 'post',
                data    : {
                    nama        : nama,
                    email       : email,
                    phone       : phone,
                    kategori    : kategori,
                    pesan       : pesan
                }, 
                success: function(data){
                    console.log(data);
                    var error = $.parseJSON(data)
                    // return false

                    if(error != true){
                        $('.error_nama').html(error.nama)
                        $('.error_email').html(error.email)
                        $('.error_phone').html(error.phone)
                        $('.error_kategori').html(error.kategori)
                        $('.error_pesan').html(error.pesan)
                    } else {
                        Swal.fire({
                                icon: 'success',
                                title: 'Sukses',
                                text: 'Terima kasih, pesan Anda sudah terkirim',
                                showConfirmButton: true,
                            })

                            $('#btn-loading').addClass('d-none');
                            $('#btn_hubKami').removeClass('d-none')
                            $('#nama').val('')
                            $('#email').val('')
                            $('#phone').val('')
                            $('#kategori').val('')
                            $('#pesan').val('')
                    }
                }
            })
        }
    })


    // media query halaman home untuk carousel
    var smallScreen = window.matchMedia("(max-width: 480px)");
    if (smallScreen.matches){
        // Screen is less than 480px
    }

    var smartphone      = window.matchMedia("(max-width: 575.98px");
    var carouselCaption = $('.carousel-inner .carousel-item .carousel-caption')
    if(smartphone.matches){
        carouselCaption.removeClass('d-none d-md-block')
    }
})
$('document').ready(function(){
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

    // gambar preview pada input file gambar
    gambar_promo.onchange = evt => {
    const [file] = gambar_promo.files
    if (file) {
        blah.src = URL.createObjectURL(file)
    }
    }
    
    // $('.hapus').click(function(e){
    //     e.preventDefault()
    //     var link = $(this).attr('href')
    //     Swal.fire({
    //     title: 'Apa Anda Yakin?',
    //     text: "Data yang sudah dihapus tidak bisa dikembalikan. Setuju?",
    //     icon: 'warning',
    //     showCancelButton: true,
    //     confirmButtonColor: '#d33',
    //     cancelButtonColor: 'silver',
    //     confirmButtonText: 'Ya, Hapus',
    //     cancelButtonText: 'Batal'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             window.location = link
    //         }
    //     })
    // })
})


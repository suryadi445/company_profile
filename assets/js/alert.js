$('document').ready(function(){
    // toast
    var flash = $('.flash').attr("data-id")
    var flash2 = $('.flash2').attr("data-id")
    
    if(flash){
        toastr.success(flash)
    }else if (flash2){
        toastr.error(flash2)
    }

    $(document).on('click', '.hapus', function(e){
        e.preventDefault()
        var link = $(this).attr('href')
        Swal.fire({
        title: 'Apa Anda Yakin?',
        text: "Data yang sudah dihapus tidak bisa dikembalikan. Setuju?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: 'silver',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link
            }
        })
    })

    $(document).on('click', '.logout', function(e){
        e.preventDefault()
        var link = $(this).attr('href')
        Swal.fire({
        title: 'Apa Anda Yakin?',
        text: "Apakah anda yakin akan Logout",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: 'silver',
        confirmButtonText: 'Ya, Logout',
        cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link
            }
        })
    })
})



$('document').ready(function(){
    // toast
    var flash = $('.flash').attr("data-id")
    
    if(flash){
        toastr.success(flash)
    }


    $('.hapus').click(function(e){
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
})



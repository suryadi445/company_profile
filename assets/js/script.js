// $('document').ready(function(){
//     $('#simpan').on('submit', function(e){
//         e.preventDefault
//         let nama = $('#nama_daftar').val()
//         let email = $('#email_daftar').val()
//         let phone = $('#phone_daftar').val()
//         let password = $('#password_daftar').val()
//         let gender = $('input[name="gridRadios"]:checked').val()

//         $.ajax({
//             url: 'user/registrasi',
//             type: 'POST',
//             data: {
//                 nama: nama,
//                 email: email,
//                 phone: phone,
//                 password: password,
//                 gender: gender
//             },success: function(data){
//                 console.log(data);
//             }
//         })

//     })
// })
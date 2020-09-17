// $(document).ready(function () {
//
//     function sweetAlert(response, redirectTo, failed) {
//         if (response.success) {
//             Swal.fire(
//                 'Successful!',
//                 response.success,
//                 'success'
//             ).then(function (result) {
//                 if (result.value) {
//                     redirectTo()
//                 }
//             })
//         }else {
//             Swal.fire(
//                 'Failed!',
//                 response.error,
//                 'error'
//             ).then(function (result) {
//                 if (result.value) {
//                     failed()
//                 }
//             })
//         }
//     }
//
//     $('#place-order').on('submit', function(event){
//         event.preventDefault();
//         $.ajax({
//             type:'POST',
//             url:'/client/store-order',
//             data: $(this).serialize(),
//             success: function (response) {
//                 var redirectTo = function () {
//                     window.location ='/home';
//                 }
//
//                 var failed = function () {
//                     window.location ='/client/cart';
//                 }
//                 sweetAlert(response, redirectTo, failed)
//             }
//         })
//     })
// })

require("./bootstrap");
import swal from "sweetalert";

document
    .getElementById("form-add-product")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        swal({
            title: "Success!",
            text: "New product added successfully!",
            icon: "success",
            type: "success",
        }).then(function () {
            document.getElementById("form-add-product").submit();
        });
    });

// document
//     .getElementById("form-delete-product")
//     .addEventListener("submit", function (event) {
//         event.preventDefault();
//         swal({
//             title: "Are you sure?",
//             text: "Once deleted, you will not be able to recover this imaginary file!",
//             icon: "warning",
//             buttons: true,
//             dangerMode: true,
//         }).then((willDelete) => {
//             if (willDelete) {
//                 swal({
//                     title: "Success!",
//                     text: "New product deleted successfully!",
//                     icon: "success",
//                     type: "success",
//                 }).then(function () {
//                     document.getElementById("form-delete-product").submit();
//                 });
//             } else {
//                 swal("Your imaginary file is safe!");
//             }
//         });
//     });

// document.getElementById("delete-product").each(function () {
//     document.getElementById(this).addEventListener("click", function (event) {
//         event.preventDefault();
//     });
// });

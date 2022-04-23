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

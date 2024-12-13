/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

document.querySelectorAll(".delete-watch").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault(); // Prevent the default action (navigation)

    const deleteUrl = this.getAttribute("data-href"); // Get the URL from data-href

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "success",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to the delete URL
        window.location.href = deleteUrl;
      }
    });
  });
});

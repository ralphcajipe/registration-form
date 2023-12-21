/* Adding an event listener to the `DOMContentLoaded` event of the document. When the DOM
content has finished loading, it selects all input elements inside elements with the class
"form-field" using `document.querySelectorAll(".form-field input")`. */
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".form-field input").forEach((input) => {
    input.addEventListener("input", function () {
      if (this.value) {
        this.classList.add("filled");
      } else {
        this.classList.remove("filled");
      }
    });
  });
});

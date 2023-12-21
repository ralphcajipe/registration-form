/* Adding an event listener to the input field with the id "username". When the user types
into the input field, the function inside the event listener is executed. */
document.getElementById("username").addEventListener("input", function () {
  if (this.value.includes(" ")) {
    document.getElementById("usernameError").textContent =
      "Username cannot contain spaces";
    this.value = this.value.replace(/\s/g, "");
  } else {
    document.getElementById("usernameError").textContent = "";
  }
});

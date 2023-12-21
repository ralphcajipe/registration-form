/* Adding an event listener to the element with the id "email". It listens for the
"keydown" event, which occurs when a key is pressed down. */
document.getElementById("email").addEventListener("keydown", function (e) {
  if (e.key === " ") {
    e.preventDefault();
    document.getElementById("emailError").textContent = "Email cannot contain spaces";
  } else {
    document.getElementById("emailError").textContent = "";
  }
});
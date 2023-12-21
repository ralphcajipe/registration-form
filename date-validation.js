/* Adding an event listener to an HTML element with the id "dob". 
The event being listened for is the "change" event, which occurs when the value of the input field changes. */
document.getElementById("dob").addEventListener("change", function () {
  var inputDate = new Date(this.value);
  var currentDate = new Date();

  // Remove the time part from the current date
  currentDate.setHours(0, 0, 0, 0);

  if (inputDate.toString() === "Invalid Date" || inputDate > currentDate) {
    document.getElementById("dobError").textContent = "Invalid date";
    this.value = "";
  } else {
    document.getElementById("dobError").textContent = "";
  }
});

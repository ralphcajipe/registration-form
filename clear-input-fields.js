/* Setting up an event listener for the `window.onload` event, which is triggered when the
web page has finished loading. When the event is triggered, it clears all text and email input fields, and text areas. */
window.onload = function () {
  var inputs = document.getElementsByTagName("input");
  for (var i = 0; i < inputs.length; i++) {
    if (
      inputs[i].type.toLowerCase() == "text" ||
      inputs[i].type.toLowerCase() == "email"
    ) {
      inputs[i].value = "";
    }
  }

  var textareas = document.getElementsByTagName("textarea");
  for (var i = 0; i < textareas.length; i++) {
    textareas[i].value = "";
  }
};

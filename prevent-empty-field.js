/* Adding an event listener to the "DOMContentLoaded" event, which is fired when the
initial HTML document has been completely loaded and parsed. */
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        var username = document.getElementById("username");
        var email = document.getElementById("email");
        var dob = document.getElementById("dob");

        if (!username.value.trim()) {
            document.getElementById("usernameError").textContent = "Username is required";
            usernameError.className = "error-message";
            event.preventDefault();
        }

        if (!email.value.trim()) {
            document.getElementById("emailError").textContent = "Email is required";
            emailError.className = "error-message";
            event.preventDefault();
        }

        if (!dob.value.trim()) {
            document.getElementById("dobError").textContent = "Birthday is required";
            dobError.className = "error-message";
            event.preventDefault();
        }
    });
});
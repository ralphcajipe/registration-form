<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> <!-- Import PT Sans font -->
    <link rel="stylesheet" href="styles.css">
    <script src="form-input-effects.js"></script>

    <!-- For Birthday date picker -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div class="form-container">
        <h1>Register</h1>
        <form action="process.php" method="post">
            <!-- Username -->
            <div class="form-field">
                <input type="text" id="username" name="username">
                <label for="username" class="label-name">
                    <span class="content-name">Username</span>
                </label>
                <span id="usernameError" style="color: red;"></span>
            </div>

            <!-- Email -->
            <div class="form-field">
                <input type="email" id="email" name="email">
                <label for="email" class="label-name">
                    <span class="content-name">Email</span>
                </label>
                <span id="emailError" style="color: red;"></span>
            </div>

            <!-- Birthday -->
            <div class="form-field">
                <input type="text" id="dob" name="dob" placeholder="Birthday (mm/dd/yyyy)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Birthday (mm/dd/yyyy)'">
                <span id="dobError" style="color: red;"></span>
                <label for="dob" class="label-name"></label>
            </div>

            <!-- Message -->
            <div class="form-field">
                <label for="message">Message (Optional):</label>
                <textarea id="message" name="message" style="resize: none;"></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Client Side Validation -->
    <script src="date-picker.js"></script>
    <script src="date-validation.js"></script>
    <script src="username-no-spaces.js"></script>
    <script src="prevent-empty-field.js"></script>
    <script src="email-no-spaces.js"></script>
    <script src="clear-input-fields.js"></script>
</body>

</html>
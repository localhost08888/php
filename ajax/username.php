<!DOCTYPE html>
<html lang="en">
<head>
    <title>AJAX Username Validation</title>
</head>
<body>

    <h1>AJAX Username Validation</h1>

    <label for="username">Enter Username:</label>
    <input type="text" id="username" onkeyup="validateUsername()" placeholder="Enter username">
    
    <p id="message" style="font-weight: bold;"></p>

    <script>
        function validateUsername() 
        {
            var username = document.getElementById("username").value.trim();
            var messageBox = document.getElementById("message");

            if (username === "")
             {
                messageBox.innerHTML = "<span style='color: red;'>Enter username</span>";
                return;
            } 
            else if (username.length < 3)
             {
                messageBox.innerHTML = "<span style='color: orange;'>Username is too short</span>";
                return;
            } 
            else 
            {
                // Send AJAX request to check username availability
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "validate_username.php?username=" + encodeURIComponent(username), true);

                xhr.onreadystatechange = function () 
                {
                    if (xhr.readyState == 4 && xhr.status == 200) 
                    {
                        messageBox.innerHTML = xhr.responseText; // Response from server
                    }
                };

                xhr.send();
            }
        }
    </script>

</body>
</html>

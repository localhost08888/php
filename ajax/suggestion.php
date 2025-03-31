<!DOCTYPE html>
<html >
<head> 
    <script>
        function showSuggestions(str)
         {
            if (str.length === 0)
             {
                document.getElementById("suggestions").innerHTML = "";
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "getsuggestion.php?q=" + str, true);
            xhr.onreadystatechange = function () 
            {
                if (xhr.readyState == 4 && xhr.status == 200)
                 {
                    document.getElementById("suggestions").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h2>Search for Suggestions</h2>
    <input type="text" onkeyup="showSuggestions(this.value)" placeholder="Type something...">
    <div id="suggestions"></div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Finder</title>
    <script>
        function fetchMovies() 
        {
            var actor = document.getElementById("actorSelect").value;
            if (actor === "") return;
            
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "getmovie.php?actor=" + encodeURIComponent(actor), true);
            xhr.onreadystatechange = function () 
            {
                if (xhr.readyState == 4 && xhr.status == 200) 
                {
                    document.getElementById("movieDetails").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>

    <h1>Select an Actor to View Movies</h1>

    <select id="actorSelect" onchange="fetchMovies()">
    
        <option value="nilesh">nilesh</option>
        <option value="om">om</option>
        <option value="swaraj">swaraj</option>
    </select>

    <h3>Movie Details:</h3>
    <div id="movieDetails" ></div>

</body>
</html>

<!-- CREATE TABLE MOVIE (
    mno SERIAL PRIMARY KEY,
    mname VARCHAR(100),
    release_yr INT
);

CREATE TABLE ACTOR (
    ano SERIAL PRIMARY KEY,
    aname VARCHAR(100)
);

CREATE TABLE MOVIE_ACTOR (
    mno INT REFERENCES MOVIE(mno),
    ano INT REFERENCES ACTOR(ano),
    PRIMARY KEY (mno, ano)
); -->
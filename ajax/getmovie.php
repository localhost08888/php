

<?php
$conn = pg_connect("host=localhost dbname=your_database user=your_user password=your_password") 
   
or die("Connection failed!");

if (isset($_GET["actor"]))
 {
    $actor = pg_escape_string($conn, $_GET["actor"]);
    $query = "SELECT m.mname, m.release_yr 
              FROM MOVIE m 
              JOIN MOVIE_ACTOR ma ON m.mno = ma.mno 
              JOIN ACTOR a ON ma.ano = a.ano 
              WHERE a.aname = '$actor'";

    $result = pg_query($conn, $query);
    echo pg_num_rows($result) ? implode("<br>", array_map(fn($row) => "{$row['mname']} ({$row['release_yr']})", pg_fetch_all($result))) : "No movies found!";
}

pg_close($conn);
?>




<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $aname = $_GET['aname'];
        $movies = [
            'nilesh' => [
                ['mno' => 201, 'mname' => 'Inception', 'release_yr' => 2010],
                ['mno' => 202, 'mname' => 'Titanic', 'release_yr' => 1997]
            ],
            'om' => [
                ['mno' => 301, 'mname' => 'Fight Club', 'release_yr' => 1999],
                ['mno' => 302, 'mname' => 'Troy', 'release_yr' => 2004]
            ],
            'swaraj' => [
                ['mno' => 401, 'mname' => 'Lucy', 'release_yr' => 2014],
                ['mno' => 402, 'mname' => 'Marriage Story', 'release_yr' => 2019]
            ]
        ];

        if (isset($movies[$aname])) {
            foreach ($movies[$aname] as $movie) {
                echo "Movie No: " . $movie['mno'] . "<br>";
                echo "Movie Name: " . $movie['mname'] . "<br>";
                echo "Release Year: " . $movie['release_yr'] . "<br><br>";
            }
        } else {
            echo "No movies found for the selected actor.";
        }
    }
    ?>

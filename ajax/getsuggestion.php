<?php
$suggestions = ["Alice", "Bob", "Charlie", "David", "Daniel", "Eve", "Edward", "Emily", "Frank", "George"];

if (isset($_GET['q'])) 
{
    $query = strtolower(trim($_GET['q']));
    $matches = array_filter($suggestions, function ($name) use ($query) 
    {
        return stripos($name, $query) !== false;
    });

    echo $matches ? implode("<br>", $matches) : "No suggestions found";
}
?>

<!-- <?php
$conn = pg_connect("host=localhost dbname=your_database user=your_user password=your_password");

if (!$conn) 
{
   die("Connection failed!"); 
  }

if (isset($_GET["ename"]))
 {
    $ename = pg_escape_string($conn, $_GET["ename"]);
    $query = "SELECT * FROM employee WHERE ename='$ename'";
    $result = pg_query($conn, $query);

    if ($row = pg_fetch_assoc($result)) 
    {
        echo "Employee No: {$row['eno']}<br>Name: {$row['ename']}<br>Designation: {$row['designation']}<br>Salary: \${$row['salary']}";
    } 
    else
     {
        echo "No employee found!";
    }
}

pg_close($conn);
?> 





<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $ename = $_GET['ename'];

    $employees = [
        'nilesh' => ['eno' => 101, 'designation' => 'Manager', 'salary' => 75000],
        'om' => ['eno' => 102, 'designation' => 'Developer', 'salary' => 60000],
        'swaraj' => ['eno' => 103, 'designation' => 'Analyst', 'salary' => 50000]
    ];

    if (isset($employees[$ename])) {
        $emp = $employees[$ename];
        echo "Employee No: {$emp['eno']}<br>";
        echo "Name: $ename<br>";
        echo "Designation: {$emp['designation']}<br>";
        echo "Salary: \${$emp['salary']}";
    } else {
        echo "No employee found.";
    }
}
?>
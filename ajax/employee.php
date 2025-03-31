<!DOCTYPE html>
<html lang="en">
<head>
    <title>AJAX Employee Details</title>
    <script>
        function getEmployeeDetails() 
        {
            var ename = document.getElementById("employeeSelect").value;

            if (ename === "")
             {
                document.getElementById("details").innerHTML = "";
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "getemployee.php?ename=" + encodeURIComponent(ename), true);

            xhr.onreadystatechange = function ()
             {
                if (xhr.readyState == 4 && xhr.status == 200)
                 {
                    document.getElementById("details").innerHTML = xhr.responseText;
                }
            };

            xhr.send();
        }
    </script>
</head>
<body>

    <h2>Select Employee</h2>
    
    <label for="employeeSelect">Choose Employee:</label>
    <select id="employeeSelect" onchange="getEmployeeDetails()">
        <option value="">Select an employee</option>
        <option value="nilesh">nilesh</option>
        <option value="om">om</option>
        <option value="swaraj">swaraj</option>
    </select>

    <h3>Employee Details:</h3>
    <div id="details"></div>

</body>
</html>

<!-- CREATE TABLE EMP
  (
    eno INT PRIMARY KEY,
    ename VARCHAR(50),
    designation VARCHAR(50),
    salary DECIMAL(10,2)
);

INSERT INTO EMP VALUES 
(101, 'Alice', 'Manager', 75000),
(102, 'Bob', 'Developer', 60000),
(103, 'Charlie', 'Analyst', 50000); -->

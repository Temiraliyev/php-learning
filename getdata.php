<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table, th, td {
            
            border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 300px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
tr:hover {background-color: green;}
 tr, thead{
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    height: 50px;
}

th, td{
    padding: 12px 15px;
}

tbody, tr{
    border-bottom: 1px solid #dddddd;
}
tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}
tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

    </style>
</head>
<body>

<table><thead>
    <tr>
      <th >ID</th>
      <th >Firstname</th>
      <th >Lastname</th>
      <th >Email</th>
    </tr>
  </thead></table>
<?php
require "config.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT id, firstname, lastname, email FROM learningPHP";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . $row["email"] ."<br>";
    echo "<table>
    
  <tbody>
    <tr>
      <th >". $row["id"]. "</th>
      <td>". $row["firstname"]. "</td>
      <td>". $row["lastname"]. "</td>
      <td>". $row["email"]. "</td>
    </tr>
    
  </tbody>
    </table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
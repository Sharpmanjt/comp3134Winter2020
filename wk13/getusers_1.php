<?php

$servername = "127.0.0.1";
$username = "admin";
$password = "";
$db = "db";

$conn = new mysqli($servername, $username, $password, $db);

echo "connected successfully";

echo

    "<form method='get'> 
        <input type='text' name='command'>
        <input type='submit'>
    </form>";

echo "<table style='border-collapse: collapse' border='1px solid black'>
<thead>
<th>
<td>Id</td>
<td>Username</td>
<td>Email</td>
<td>First Name</td>
<td>Last Name</td>
<td>Active</td>
</th></thead><tbody>";

foreach ($arr as $line) {
    echo "<tr>
<td>$line[0]</td>
<td>$line[1]</td>
<td>$line[2]</td>
<td>$line[3]</td>
<td>$line[4]</td>
<td>$line[5]</td>
</tr>";
}
echo "</tbody> </table>";

function getDB($q, $conn){

    $query = "Select * FROM 'users' where  firstname='" . $q . "' and 'active'==1";
    $result = $conn->query($query);
    return $result;
}

?>
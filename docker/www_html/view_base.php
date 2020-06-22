<?php

$host = $_POST['host'];
$user = $_POST['login'];
$passwd = $_POST['passwd'];
$database = $_POST['database'];

$link = mysqli_connect($host, $user, $passwd, $database);

if ($link == false) {
    exit("<h2 style='color: red'>Error: no connect database\n </h2>" . mysqli_connect_error());

} else {
    echo "<h2>Information from Database</h2>";
}

echo "<table border=\"3\" width=\"100%\" bgcolor=\"#FFFFE1\">";
echo "<tr><td align='center'><b>Id</b></td><td align='center'><b>Username</b></td>";
echo "<td align='center'><b>Email</b></td><td align='center'><b>Password</b></td>";
echo "<td align='center'><b>Role</b></td><td align='center'><b>Created</b></td>";
echo "<td align='center'><b>Updated</b></td></tr>";

$sql = 'SELECT * FROM users';
$query = mysqli_query($link, $sql);

for ($c = 0; $c < mysqli_num_rows($query); $c++) {
    echo "<tr>";
    $result = mysqli_fetch_array($query);
    echo "<td>$result[id]</td><td>$result[username]</td><td>$result[email]</td>";
    echo "<td>$result[password]</td><td>$result[role]</td><td>$result[created]</td>";
    echo "<td>$result[updated]</td>";
    echo "</tr>";
}
echo "</table>";

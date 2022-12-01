<table>
<?php
$_SESSION['SEBA'] = "śmieszek";
$query = 'SELECT * FROM `czytelnicy` LIMIT 0,1;';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        foreach ($row as $a => $b) {
            echo '<th>' . $a . '</th>';
        }
        echo '</tr>';
    }
}

$query = 'SELECT * FROM `czytelnicy`;';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<tr>';
        foreach($row as $a => $b)
        {
            echo '<td>'.$b.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
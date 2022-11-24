<table>
<?php
$query = 'SELECT * FROM `stanowiska` LIMIT 0,1;';
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

$query = 'SELECT * FROM `stanowiska`;';
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
        echo '<td><a href="?page=stanowisko_formularz&stanowisko='.$row['Id_stanowisko'].'">NICE</a></td></tr>';
    }
    echo '</table>';
}

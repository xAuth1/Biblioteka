<table>
<?php
$query = 'SELECT * FROM `dzialy` LIMIT 0,1;';
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

$query = 'SELECT * FROM `dzialy`;';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    $dziady = array();
    while ($row = mysqli_fetch_assoc($result))
    {
        $dziady[]=$row;
        echo '<tr>';
        foreach($row as $a => $b)
        {
            echo '<td>'.$b.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

setcookie('dzialy',json_encode($dziady), time()+86400);
?>

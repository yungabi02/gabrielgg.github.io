<?php
$conn = new mysqli("sql.freedb.tech", "freedb_gymuser", "tB?ahay727K8zxJ", "freedb_gym_league");
$cat = "SELECT * FROM clasificacio ORDER BY pts ASC";
    $resultC = $conn->query($cat);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
  <link rel="stylesheet" href="estil.css">
</head>

<body>
    <table>
    <th>Jugador</th>
    <th>Club</th>
    <th>PJ</th>
    <th>V</th>
    <th>E</th>
    <th>D</th>
    <th>GF</th>
    <th>GC</th>
    <th>DG</th>
    <th>Pts</th>


        <?php
                        if ($resultC->num_rows > 0) {
                        while($row = $resultC->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["usuari"]."</td>";
                            echo "<td>".$row["club"]."</td>";
                            echo "<td>".$row["pj"]."</td>";
                            echo "<td>".$row["v"]."</td>";
                            echo "<td>".$row["e"]."</td>";
                            echo "<td>".$row["d"]."</td>";
                            echo "<td>".$row["gf"]."</td>";
                            echo "<td>".$row["gc"]."</td>";
                            echo "<td>".$row["dg"]."</td>";
                            echo "<td>".$row["pts"]."</td>";
                            echo "</tr>";
                        }
                    }  
                    ?>
    </table>
</body>
</html>

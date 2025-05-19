<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adnan Capitale</title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            margin: 0 auto;
        }
        th {
            text-align: left;
            background-color:rgb(9, 255, 0);
        }
        .ganjil {
            background-color:rgb(251, 255, 31); 
        }
        .genap {
            background-color:rgb(0, 204, 211); 
        }
    </style>
</head>
<body>
    <h1>Tabel Adnan</h1>
    <table border="1">
        <thead>
            <tr>
                <th style="background-color:white">bilangan</th>
                <?php 
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<th>$i</th>";
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<th>$i</th>";
                    for ($j = 1; $j <= 10; $j++) {
                        $ganjil = $i * $j;
                        $class = ($ganjil % 2 == 0) ? "genap" : "ganjil";
                        echo "<td class='$class'>$ganjil</td>";
                    }
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>
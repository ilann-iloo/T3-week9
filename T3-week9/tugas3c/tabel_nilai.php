<?php
function hitungNA($uts, $uas) {
    return ($uts * 0.4) + ($uas * 0.6);
}

function grade($na) {
    if ($na >= 80) return "A";
    elseif ($na >= 70) return "B";
    elseif ($na >= 60) return "C";
    elseif ($na >= 50) return "D";
    else return "E";
}

$data = [
    ["Ilham", "001", 80, 90],
    ["Siti", "002", 60, 70],
    ["Budi", "003", 50, 55],
    ["Ani", "004", 40, 50],
    ["Rina", "005", 90, 95],
];

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Nilai</title>
    <link rel="stylesheet" href="style.css">
</head>

<h2>Tabel Nilai Mahasiswa</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>NA</th>
        <th>Grade</th>
    </tr>

    <?php foreach ($data as $mhs): 
        $na = hitungNA($mhs[2], $mhs[3]);
        $total += $na;
        $warna = ($na < 60) ? "style='background-color: yellow'" : "";
    ?>
    <tr <?php echo $warna; ?>>
        <td><?= $mhs[0]; ?></td>
        <td><?= $mhs[1]; ?></td>
        <td><?= $mhs[2]; ?></td>
        <td><?= $mhs[3]; ?></td>
        <td><?= number_format($na, 2); ?></td>
        <td><?= grade($na); ?></td>
    </tr>
    <?php endforeach; ?>

</table>

<?php
$rata = $total / count($data);
echo "<h3>Rata-rata: " . number_format($rata, 2) . "</h3>";
?>

</body>
</html>
<head>
    <title>Konversi Suhu</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
function c_to_f($c) {
    return ($c * 9/5) + 32;
}

function f_to_c($f) {
    return ($f - 32) * 5/9;
}

function c_to_k($c) {
    return $c + 273.15;
}

$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $suhu = $_POST["suhu"];
    $opsi = $_POST["opsi"];

    if (!is_numeric($suhu)) {
        $hasil = "Input harus angka!";
    } else {
        if ($opsi == "c_f") {
            $hasil = c_to_f($suhu);
        } elseif ($opsi == "f_c") {
            $hasil = f_to_c($suhu);
        } elseif ($opsi == "c_k") {
            $hasil = c_to_k($suhu);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

<h2>Konversi Suhu</h2>

<form method="post">
    Suhu: <input type="text" name="suhu"><br><br>

    Pilih:
    <select name="opsi">
        <option value="c_f">Celsius ke Fahrenheit</option>
        <option value="f_c">Fahrenheit ke Celsius</option>
        <option value="c_k">Celsius ke Kelvin</option>
    </select><br><br>

    <button type="submit">Konversi</button>
</form>

<h3>Hasil: <?php echo $hasil; ?></h3>

</body>
</html>
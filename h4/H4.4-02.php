<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$tijd = date('H');

$dagdeel = match (true) {
    $tijd >= 6 && $tijd < 12 => "Ochtend",
    $tijd >= 12 && $tijd < 18 => "Middag",
    $tijd >= 18 && $tijd < 24 => "Avond",
    default => "Nacht",
};

echo "Op dit moment is het: $dagdeel";
?>


</body>
</html>
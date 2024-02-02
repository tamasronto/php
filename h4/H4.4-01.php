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

if ($tijd >= 6 && $tijd < 12) {
    $dagdeel = "Ochtend";
} elseif ($tijd >= 12 && $tijd < 18) {
    $dagdeel = "Middag";
} elseif ($tijd >= 18 && $tijd < 24) {
    $dagdeel = "Avond";
} elseif ($tijd >= 18 && $tijd < 24) {
    $dagdeel = "Nacht";
}

echo "Op dit moment is het: $dagdeel";
?>

</body>
</html>
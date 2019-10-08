<?php
include_once 'QuadraticEquation.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['numbera'];
    $b = $_POST['numberb'];
    $c = $_POST['numberc'];
    $phuongtrinh = new QuadraticEquation($a, $b, $c);
    $root1 = null;
    $root2 = null;
}
if ($phuongtrinh->getDelta() > 0) {
    $root1 = $phuongtrinh->getRoot1();
    $root2 = $phuongtrinh->getRoot2();
    echo 'nghiệm 1: ' . $root1;
    echo '<br>';
    echo 'nghiệm 2: ' . $root2;
} else if ($phuongtrinh->getDelta() == 0) {
    $root1 = $root2 = $phuongtrinh->getRoot();
    echo 'nghiệm : ' . $root2;
} else {
    echo 'vô nghiệm';
}
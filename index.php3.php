<?php
$first = trim(fgets(STDIN));
$second = trim(fgets(STDIN));
if (!ctype_digit($first) || !ctype_digit($second)) {
    fwrite(STDERR, "Введите, пожалуйста, число");
    exit;
}
$first = (int)$first;
$second = (int)$second;
if ($second === 0) {
    fwrite(STDERR, "Делить на 0 нельзя");
    exit;
}
$result = $first / $second;
fwrite(STDOUT, $result);

<?php
$numplayers = 8;
if ($numplayers % 2 != 0) $numplayers++; // Dummy

for ($round = 0;$round < $numplayers - 1;$round++) {
    echo 'Squad ' . ($round+1) . ":\n\n1-";

    for ($i = 0;$i < $numplayers-1;$i++) {
        if ($i % 2 == 0) {
            $player = ($numplayers-2) - ($i/2) - $round;
        } else {
            $player = ((($i-1)/2) - $round);
        }
        if ($player < 0) $player += $numplayers - 1;
        echo ($player+2);
        echo ($i % 2 == 0) ? "\r\n" : '-';
    }
    echo "<br>";
}?>
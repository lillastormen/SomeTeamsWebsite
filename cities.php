<?php

require "data.php";

$uniqueCities = [];

foreach ($teams as $team) {
    $city = $team['city'];
    if (!in_array($city, $uniqueCities)) {
        $uniqueCities[] = $city;
    }
}
?>

<h3>Cities: </h3>

<ul>
    <?php foreach($uniqueCities as $city): ?>
        <li><?php echo $city ?></li>
    <?php endforeach; ?>
</ul>
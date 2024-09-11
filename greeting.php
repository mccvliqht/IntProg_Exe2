<?php
date_default_timezone_set('Asia/Manila'); // Set timezone

$hour = date('H');

if ($hour >= 5 && $hour < 12) {
    echo "<h2>Good Morning!</h2>".date("Y-m-d");
} elseif ($hour >= 12 && $hour < 17) {
    echo "<h2>Good Afternoon!</h2>".date("Y-m-d");
} elseif ($hour >= 17 && $hour < 21) {
    echo "<h2>Good Evening!</h2>".date("Y-m-d");
} else {
    echo "<h2>Good Night!</h2>".date("Y-m-d");
}


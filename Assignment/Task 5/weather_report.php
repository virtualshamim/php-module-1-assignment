<?php
    // Define the temperature variable
    $temperature = 20; 

    // Provide weather information based on the temperature
    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature > 0 && $temperature <= 15) {
        echo "<p>It's cool.</p>";
    } else {
        echo "<p>It's warm.</p>";
    }
    ?>
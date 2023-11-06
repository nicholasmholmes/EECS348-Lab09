<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['size'])) {
        // Get size
        $size = intval($_POST['size']);

        // Check size
        if ($size > 0) {
            // Print header and table
            echo "<h2>Multiplication Table of Size $size</h2>";
            echo "<table>";
            
            // Print the header row
            echo "<tr><th>*</th>";
            for ($i = 1; $i <= $size; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Print the multiplication table
            for ($row = 1; $row <= $size; $row++) {
                echo "<tr><th>$row</th>";
                for ($col = 1; $col <= $size; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        // If not a positive integer...
        } else {
            echo "<p>Please enter a positive integer.</p>";
        }
    }
    ?>
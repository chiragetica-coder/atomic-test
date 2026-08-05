<?php
//echo "Okay, Atomic Deployment Working on this server @ " . date("Y-m-d H:i:s");

echo "<strong>Your Web PHP:</strong> " . PHP_VERSION . "<br>";

$cliVersion = shell_exec('php -v 2>&1');

echo "<strong>Your PHP CLI:</strong><br><pre>" . htmlspecialchars($cliVersion) . "</pre>";

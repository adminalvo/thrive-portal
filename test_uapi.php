<?php
header('Content-Type: text/plain');

echo "--- Testing UAPI ---\n";
echo exec('uapi ZoneEdit fetch_zone_records domain=thrive.az 2>&1') . "\n";
?>

<?php
header('Content-Type: text/plain');

$out = shell_exec('cpapi2 --user=btgdrqsh ZoneEdit fetchzone_records domain=thrive.az 2>&1');
echo $out;
?>

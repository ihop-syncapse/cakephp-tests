<?php
$start_time = microtime(true);
echo "This is PHP\n";

$duration = microtime(true) - $start_time;
$memory_usage = memory_get_peak_usage(true);
?>
<!--
Memory Usage: <?php echo $memory_usage/1024/1024; ?> MB
Duration: <?php echo sprintf("%.3f", $duration); ?> sec
-->
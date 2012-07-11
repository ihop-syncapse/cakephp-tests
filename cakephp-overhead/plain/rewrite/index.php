<?php
$start_time = microtime(true);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>mod_rewrite test</title>
 </head>
 <body>
  <h1>mod_rewrite test</h1>
  <p>This is the re-written page</p>
 </body>
</html>
<?php
$duration = microtime(true) - $start_time;
$memory_usage = memory_get_peak_usage(true);
?>
<!--
Memory Usage: <?php echo $memory_usage/1024/1024; ?> MB
Duration: <?php echo sprintf("%.3f", $duration); ?> sec
-->
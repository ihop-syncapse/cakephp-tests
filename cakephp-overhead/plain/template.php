<?php
$start_time = microtime(true);
$title = "PHP Template Rendering";
$variables = "variables";
?>
<!DOCTYPE html>
<html>
 <head>
  <title><?php echo $title ?></title>
 </head>
 <body>
  <h1><?php echo $title ?></h1>
  <p>This is a paragraph of test with some <?php echo $variables; ?> rendered inside.</p>
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
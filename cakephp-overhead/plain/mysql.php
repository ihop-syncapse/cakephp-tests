<?php
$start_time = microtime(true);

// include the mysql configuration
require(dirname(__FILE__) . '/config/database.php');

$id = 1;
if (!empty($_GET['id'])) {
	$id = intval($_GET['id']);
}

// initialize the connection to the MySQL database
$mysql_obj = new mysqli(
	$mysql_config['host'],
	$mysql_config['username'],
	$mysql_config['password'],
	$mysql_config['database'],
	$mysql_config['port']
	);
$mysql_obj->set_charset($mysql_config['encoding']);

// build the query
$query = "SELECT Country.id, Country.name, Country.abbr" .
		" FROM `countries` Country" .
		" WHERE Country.id=?" .
		" LIMIT 1";
		
// Initialize a result object
$item = array('Country');

// Prepare the query for execution
$stmt = $mysql_obj->prepare($query);
$stmt->bind_param('i', $id);

// Execute the query
$stmt->execute();

// fetch the result
$stmt->bind_result(
			$item['Country']['id'],
			$item['Country']['name'],
			$item['Country']['abbr']
			);
$stmt->fetch();

// Close the prepared statement object
$stmt->close();

// close the connection
$mysql_obj->close();

// Render the result
$title = 'MySQL Query Test';
?>
<!DOCTYPE html>
<html>
 <head>
  <title><?php echo $title ?></title>
 </head>
 <body>
  <h1><?php echo $title ?></h1>
  <form action="mysql.php" method="GET">
   <div class="input text">
    <label for="id">Id</label><input type="text" name="id" value="<?php echo $id; ?>" size="4" />
   </div>
   <div class="input submit">
    <input type="submit" name="s1" value="Go" />
   </div>
  </form>
  <table>
   <thead>
    <tr>
     <th>Id</th>
     <th>Name</th>
     <th>Abbr</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     <td><?php echo $item['Country']['id'] ?></td>
     <td><?php echo $item['Country']['name'] ?></td>
     <td><?php echo $item['Country']['abbr'] ?></td>
   </tbody>
  </table>
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
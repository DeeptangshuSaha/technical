<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backend-Test</title>
</head>
<body>
  <!--"mongodb://127.0.0.1:27017/technical"-->
  <?php
  // echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
  $manager = new MongoDB\Driver\Manager();
  $query = new MongoDB\Driver\Query(array());

  $cursor = $manger->executeQuery('technical.tech1', $query);
  print_r($cursor->toArray());
  ?>
</body>
</html>
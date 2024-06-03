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
  $options = 
  $query = new MongoDB\Driver\Query();
  // $collection = $manager->technical->tech1;
  // $cursor = $manger->executeQuery('technical.tech1', $query);
  // print_r($cursor->toArray());
  // $m = new MongoClient();
  echo "Connection to database successfully";

  // select a database
  $db = $manager->technical;
  echo "Database mydb selected";
  $collection = $db->tech1;
  echo "Collection selected succsessfully";
  $document = array(
    "title" => "MongoDB",
    "description" => "database",
    "likes" => 100,
    "url" => "http://www.tutorialspoint.com/mongodb/",
    "by" => "tutorials point"
  );
  $collection->insert($document);
  echo "DONE";
  $cursor = $collection->find();
  // iterate cursor to display title of documents

  foreach ($cursor as $document) {
    echo $document["title"] . "\n";
  }

  ?>
</body>

</html>
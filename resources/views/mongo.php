<?php

//$collection = (new MongoDB\Client)->fivedstore->Users;

//$cursor = $collection->find([], [ 'limit' => 10]);

//foreach ($cursor as $document) {
    //echo '<br />';

    //print_r($document);
    //echo '<br />';
//}


//Create function
// $collection = (new MongoDB\Client)->fivedstore->Categories;

// $insertResult = $collection->insertOne([
//    'category' => 'Cellphones',
//    'description' => 'Smartphones for on the go use'
// ]);

// printf('Inserted %d document(s)\n', $insertResult->getInsertedCount());

// var_dump($insertResult->getInsertedID());


//Read functions
// echo '<br />';
// $table = ($collection->find());

// foreach ($table as $record) {
//     echo "ID: ".$record["_id"]."<br />";
//     echo "Category: ".$record["category"]."<br />";
//     echo "Description: ".$record["description"]."<br />";
//     echo '<br />';
//     echo '<br />';
    
// }


//Update function
// $updateResult = $collection->UpdateOne([
//     "category" => "Cellphones"
// ], 
// [
//     '$set' => [ "description" => "Mobile Phones"]
// ]);

// printf("Matched %d document(s)<br />", $updateResult->getMatchedCount());
// printf("Modified %d document(s)<br />", $updateResult->getModifiedCount());



//Delete function
// $deleteResult = $collection->deleteOne([
//     "_id" => ["5ef34b5f757d0000e70050e2"]
// ]);

// printf("Matched %d document(s)\n", $deleteResult->getDeletedCount());


$collection = (new MongoDB\Client)->Entertainment->Movies;
$productCount = $collection->count([ "category_id" => "1234" ]);

print_r($productCount);
<?php

require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();

$name = $faker->name;
$picsum_id = $faker->numberBetween($min = 0, $max = 1000);

echo $name;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "exam";
 
// $conn = mysqli_connect($servername, $username, $password, $dbname);
 
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }



// $sql = "INSERT INTO images (name,picsum_id,imagefile,author,width,height,added_at) VALUES ('$model', '$marka', '$rok_produkcji', '$cena')";

 

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

 

// mysqli_close($conn);




$numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

foreach ($numbers as $value) {
    $api_url = 'https://picsum.photos/id/'.$value.'/info';
    $json_data=file_get_contents($api_url);
    $response_data = json_decode($json_data);
    var_dump($response_data);
    
}


?>
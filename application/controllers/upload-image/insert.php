<?php

//insert.php

$image_id = 0;

if(isset($_POST["image"]))
{
    include('database_connection.php');

    $books = $_POST["books"];
    $data = $_POST["image"];


    $image_array_1 = explode(";", $data);

    $image_array_2 = explode(",", $image_array_1[1]);

    $data = base64_decode($image_array_2[1]);

    $imageName = time() . '.png';

    file_put_contents($imageName, $data);

    $image_file = addslashes(file_get_contents($imageName));

    $query = "INSERT INTO image_mode(image) VALUES ('".$image_file."')";
    $statement = $connect->prepare($query);



    if($statement->execute())
    {
        $image_id = $connect->lastInsertId();
        unlink($imageName);
    }else{
        echo 'Image save into database | False =>';
    }

}

?>

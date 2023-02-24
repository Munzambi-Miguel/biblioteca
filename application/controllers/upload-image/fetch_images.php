<?php

//fetch_images.php


if (isset($_POST["id"])) {
    include('database_connection.php');

    $query = "SELECT * FROM `image_mode` WHERE `image_mode`.`books_id` =" . $_POST["id"] . "  ORDER BY id DESC LIMIT 1";

    $statement = $connect->prepare($query);

    $output = '<div class="row">';

    if ($statement->execute()) {
        $result = $statement->fetchAll();

        foreach ($result as $row) {
            $output .= '
              <div>
                    <img width="100%" src="data:image/png;base64,' . base64_encode($row['image']) . '" class="img-thumbnail" />
              </div>
        ';
        }
    }

    $output .= '</div>';
    echo $output;
}

?>
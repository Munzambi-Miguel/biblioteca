<?php

//insert.php

if (isset($_POST["image"])) {


    $data = $_POST["image"];

    $image_array_1 = explode(";", $data);

    $image_array_2 = explode(",", $image_array_1[1]);

    $data = base64_decode($image_array_2[1]);

    $output = '<div class="row">';
    $output .= '
          <div>
                <img width="100%" src="data:image/png;base64,' . base64_encode($data) . '" class="img-thumbnail" />
          </div>
    ';
    $output .= '</div>';

    echo $output;

}

?>

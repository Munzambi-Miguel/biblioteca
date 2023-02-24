<?php

//fetch_images.php

/*

$query = "SELECT * FROM tbl_images ORDER BY image_id DESC";

$statement = $connect->prepare($query);

$output = '<div class="row">';

if ($statement->execute()) {
    $result = $statement->fetchAll();

    foreach ($result as $row) {
        $output .= '
  <div class="col-md-2" style="margin-bottom:16px;">
   <img src="data:image/png;base64,' . base64_encode($row['images']) . '" class="img-thumbnail" />
  </div>
  ';
    }
}

$output .= '</div>';

echo $output;
*/

class fetch_images extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
    }

    public function viewImage()
    {
        include('upload-image/fetch_images.php');
    }

    public function sliderView()
    {
        include('upload-image/kalende_insert.php');
    }


    public function inseri_image()
    {
        $this->db->where('books_id',$this->input->post('books'));
        $this->db->delete('image_mode');

        $image =array ('books_id' => $this->input->post('books'));



        include('upload-image/insert.php');
        $this->db->where('id',$image_id);
        $this->db->update('image_mode', $image);

        if ($this->db->affected_rows() > 0) {
            echo json_encode('foi um sucesso');
        } else {
            echo json_encode('foi um fracaço');
        }
    }

    public function changeImage()
    {
        include('upload-image/change.php');
    }


}

?>
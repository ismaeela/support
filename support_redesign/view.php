<?php
function __autoload($class){
  $myClass="methods.php";
  include_once("$myClass");
}

$obj = new mains_methods();
$statement = $obj->view_ticket();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();

$output = '<table class="table table-bordered table-striped table-condensed">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Clients Name</th>
        <th class="numeric">Sender ID</th>
        <th class="numeric">Issue Description</th>
        <th class="numeric">Subject</th>
        <th class="numeric">Communication chanel</th>
        <th class="numeric">Date</th>
        <th class="numeric">Time</th>
        <th class="numeric">Assign TO</th>
      </tr>
    </thead>';
 if($total_row > 0){
    foreach($result as $row){
    $output .='<tbody>
      <tr>
        <td></td>
        <td>'.$row["tic_client_id"].'</td>
        <td class="numeric">'.$row["tic_sender_id"].'</td>
        <td class="numeric">'.$row["tic_desc"].'</td>
        <td class="numeric">'.$row["tic_subject"].'</td>
        <td class="numeric">'.$row["tic_chanel"].'</td>
        <td class="numeric">'.$row["tic_date"].'</td>
        <td class="numeric">'.$row["tic_time"].'</td>
        <td class="numeric">'.$row["tic_assign_id"].'</td>
      </tr>
    </tbody>';
  }
}else

{
    $output .='
    <tr>
        <td colspan="4" align="center">Data not found</td>
    </tr>
    ';
}
$output .= '</table>';
echo $output;

?>
 

 <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 {
  width: 100%;    
  background-color: #f1f1c1;
}
</style>
</head>
<body>

  <?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
  try {

    $order ='';
    $email='wrongInputFromUser@gmail.com';

    if(!empty($_POST)) {
        $order = json_decode($_POST['data']);
        $email = $_POST['email'];
        $table_no = $_POST['table_no'];
        $order_time= $_POST['time'];
  
    }
     
   require 'vendor/autoload.php';
$client= new  MongoDB\Client;
$company=$client->company;
$company_collection=$company->company_collection;

   $total=0;
   date_default_timezone_set("Asia/Calcutta");
   echo '<H5>'.'Your visiting date and time is </H5>'.'</h2>'. date('d-m-Y H:i:s', time()).' '. date("l") .'</H2>';
  echo '<br>';
   echo '<table style="width:50%">
   <tr>
     <th>dish</th>
     <th>quantity</th> 
     <th>price</th>
   </tr> ';   

    foreach($order as $item)
    {
        echo '<tr>';
      foreach ($item as $key => $value) {
       echo '<td>'.$value.'</td>';
       
   if($key=='cost')
   {
       $total=$total+$value;
   }

      }
      echo '</tr>';
    } 
    echo '<tr>';
    echo '<td colspan="2">'."Table No".'</td>';
    echo '<td>'.$table_no.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td colspan="2">'."TOTAL".'</td>';
    echo '<td>'.$total.'</td>';
    echo '</tr>';
   echo' </table>';
   
   $result=$company_collection->insertOne( 
    [
      'date' =>date("Y-m-d"),    
    'email' =>$email,
    'table_no' =>$table_no,
    'order_time' =>$order_time,
    'cost' =>$total,
    'data'=> $order,
    ]
);
  


  }
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }

    echo '<h4> visit again....</h4>';
  ?>

  


</body>
</html>

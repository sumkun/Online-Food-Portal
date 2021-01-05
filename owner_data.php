
<?php

require 'vendor/autoload.php';


  try {
    $client = new MongoDB\Client(
      'mongodb+srv://user:user@cluster1-7augr.mongodb.net/test?retryWrites=true&w=majority');
        $company=$client->test;
        $company_collection=$company->example1;
       
        $order=$company_collection->find(
          ['date' =>date("Y-m-d")]
        );  
  }

  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }

  
  echo "<HTML>
 <HEAD>
    <TITLE>first</TITLE>";
  echo ' <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';     
        
   echo "</HEAD>
   <body>
   <style>
   table,th,td {
     border: 1px solid black;
   }
   </style>";

   echo '<table  align="center" width="700">
   <tr>
     <th>Email</th>
     <th>Table No</th> 
     <th>Time</th>
     <th>Cost</th>
   </tr> ';   

    foreach($order as $item)
    {
        echo '<tr>';
      foreach ($item as $key => $value) {
       
   if($key=='email' || $key=='table_no' || $key=='cost' || $key=='order_time')
   {
    echo '<td style="text-align:center">'.$value.'</td>'; 
   }

      }
      echo '</tr>';
    } 
   echo'</table>';
   

 echo"</body>
   
   </HTML>";  
  
  ?>







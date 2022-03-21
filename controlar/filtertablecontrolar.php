<?php
 require_once ("models\db_connect.php");
 function filtertable($key , $type){
     if($type== 'weekly'){

        $query ="SELECT * FROM weekly_list Where unit = '$key'";
        $result=getAssocArray($query);

     }
     elseif($type== 'monthly'){
        $query ="SELECT * FROM monthly_list Where unit = '$key'";
        $result=getAssocArray($query);
     }
     elseif($type== 'yearly'){
        $query ="SELECT * FROM yealy_list Where unit = '$key'";
        $result=getAssocArray($query);
     }
     elseif($type== 'quaterly'){
        $query ="SELECT * FROM quartly_list Where unit = '$key'";
        $result=getAssocArray($query);
     }
    
     //echo $query;
     return $result;

 }
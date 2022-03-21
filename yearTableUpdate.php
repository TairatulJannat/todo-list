<?php
require_once("controlar/filtertablecontrolar.php");
$key=$_REQUEST["key"];

$userid=$_REQUEST["id"];
$type=$_REQUEST["type"];
$year=$_REQUEST["yearno"];
// print_r($key  ) ;
// print_r($userid );
// print_r( $type  ) ;
// print_r($week ) ;
?>

<?php
if($type == 'quaterly'){
    $query="UPDATE `yealy_list` SET `$year`='Done' WHERE id='$userid'";
    // echo $query;
    execute($query);
}

?>

<section class="section-content py-5" >
    <table id="demo" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Frequency</th>
                <th>Unit</th>
                <th>StakeHolders</th>
                <th>Functional Owner</th>
                <th>Approver</th>
                
                <th>    
               
               <?php
                   echo date("Y", strtotime("-2 year")); // gives 201101
               ?>
               </th>
             
               <th>
               
               
               <?php
                   echo date("Y", strtotime("-1 year")); // gives 201101
               ?>
               </th> 
               <th>
               <?php
                   echo date("Y") // gives 201101
               ?>
               </th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($type == 'yearly'){
            $value=filtertable($key , $type);
            $last_year =  date("Y", strtotime("-2 year"));
            $secound_year = date("Y", strtotime("-1 year"));
            $recentt_year= date("Y");
            $recenttyear=$recentt_year;
             $lastyear= $last_year;
             $seclast_year= $secound_year;
        
        foreach($value as $values){
            
            echo "<tr>";
            echo "<td>".$values["Task_name"]."</td>";
            echo "<td>".$values["Frequency"]."</td>";
            echo "<td>".$values["Unit"]."</td>";
            echo "<td>".$values["Stakeholder"]."</td>";
            echo "<td>".$values["Functional_owner"]."</td>";
            echo "<td>".$values["Approval"]."</td>";
            
            if($values[$lastyear] == 'Done'){
                
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else{
                $id = $values["id"];
                // echo gettype($taskname);
                // echo $taskname;
                echo '<td><input onChange="updateyear(' . $id . ' ,' . "'$last_year'" . ')" type="checkbox"></td>';

                // echo "<td><input onChange='updatemonth($id , $last_month)' type='checkbox'></td>";

            }
            

            if($values[$seclast_year] == 'Done'){
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else {
                $id = $values["id"];
                // echo '<td><input onChange="updatemonth(' . $id . ' ,' . "'$seclast_month'" . ')" type="checkbox"></td>';
                echo '<td><input onChange="updateyear(' . $id . ' ,' . "'$secound_year'" . ')" type="checkbox"></td>';
            }
            
            if($values[$recenttyear] ==  'Done'){
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else  {
                $id = $values["id"];
                echo '<td><input onChange="updateyear(' . $id . ' ,' . "'$recentt_year'" . ')" type="checkbox"></td>';
            }

           
           

            
            echo "</tr>";
            
        }


        ?>
           <form action=""></form>
        </tbody>
        <?php
        }
        ?>

       
            
        </tbody>
       

       
            
        </tbody>
      
    </table>
    
</section>
<!-- <script>

</script> -->
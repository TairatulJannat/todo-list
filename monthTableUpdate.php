<?php
require_once("controlar/filtertablecontrolar.php");
$key=$_REQUEST["key"];

$userid=$_REQUEST["id"];
$type=$_REQUEST["type"];
$month=$_REQUEST["monthno"]."'".date("y", strtotime(date('Y-m-d')));
// print_r($key  ) ;
// print_r($userid );
// print_r( $type  ) ;
// print_r($week ) ;
?>

<?php
if($type == 'monthly'){
    $query="UPDATE `monthly_list` SET `$month`='Done' WHERE id='$userid'";
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
                    echo date("M", strtotime("d-m-Y")); // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th>
                <th> 
                
                <?php
                    echo date("M", strtotime(date("d-m-Y")." -1 month")); // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th>
                <th>    
                <?php
                    echo date("M", strtotime(date('d-m-Y-2'))); // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($type == 'monthly'){
            $value=filtertable($key , $type);
            $last_month = date("M", strtotime(date('d-m-Y-2')));
            $secound_last_month = date("M", strtotime(date("d-m-Y")." -1 month"));
            $recentt_month= date("M", strtotime("d-m-Y"));
        $recenttmonth=$recentt_month."'".date("y", strtotime(date('Y-m-d')));
        $lastmonth=$last_month."'".date("y", strtotime(date('Y-m-d')));
        $seclast_month=$secound_last_month."'".date("y", strtotime(date('Y-m-d')));
        // echo $seclast;

        foreach($value as $values){
            echo "<tr>";
            echo "<td>".$values["Task_name"]."</td>";
            echo "<td>".$values["Frequency"]."</td>";
            echo "<td>".$values["Unit"]."</td>";
            echo "<td>".$values["Stakeholder"]."</td>";
            echo "<td>".$values["Functional_owner"]."</td>";
            echo "<td>".$values["Approval"]."</td>";
            if($values[$recenttmonth] ==  'Done'){
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else  {
                $id = $values["id"];
                echo '<td><input onChange="updatemonth(' . $id . ' ,' . "'$recentt_month'" . ')" type="checkbox"></td>';
            }


            if($values[$seclast_month] == 'Done'){
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else {
                $id = $values["id"];
                // echo '<td><input onChange="updatemonth(' . $id . ' ,' . "'$seclast_month'" . ')" type="checkbox"></td>';
                echo '<td><input onChange="updatemonth(' . $id . ' ,' . "'$secound_last_month'" . ')" type="checkbox"></td>';
            }

            if($values[$lastmonth] == 'Done'){
                
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else{
                $id = $values["id"];
                // echo gettype($taskname);
                // echo $taskname;
                echo '<td><input onChange="updatemonth(' . $id . ' ,' . "'$last_month'" . ')" type="checkbox"></td>';

                // echo "<td><input onChange='updatemonth($id , $last_month)' type='checkbox'></td>";

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
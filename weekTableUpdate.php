<?php
require_once("controlar/filtertablecontrolar.php");
$key=$_REQUEST["key"];

$userid=$_REQUEST["id"];
$type=$_REQUEST["type"];
$week="W".$_REQUEST["weekno"]."'".date("y", strtotime(date('Y-m-d')));
// print_r($key  ) ;
// print_r($userid );
// print_r( $type  ) ;
// print_r($week ) ;
?>

<?php
if($type == 'weekly'){
    $query="UPDATE `weekly_list` SET `$week`='Done' WHERE id='$userid'";
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
                
                <th>W
                <?php
                    echo date("W", strtotime(date('Y-m-d')))-2; // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th>
                <th>W
                <?php
                    echo date("W", strtotime(date('Y-m-d')))-1; // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th>
                <th>W
                <?php
                    echo date("W", strtotime(date('Y-m-d'))); // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($type == 'weekly'){
            $value=filtertable($key , $type);
            $last_week = date("W", strtotime(date('Y-m-d')))-1;
            $secound_last = date("W", strtotime(date('Y-m-d')))-2;
            $recentt_week= date("W", strtotime(date('Y-m-d')));
        $recenttweek="W".date("W", strtotime(date('Y-m-d')))."'".date("y", strtotime(date('Y-m-d')));
        $lastweek="W". $last_week."'".date("y", strtotime(date('Y-m-d')));
        $seclast="W". $secound_last."'".date("y", strtotime(date('Y-m-d')));
        // echo $seclast;

        foreach($value as $values){
            echo "<tr>";
            echo "<td>".$values["Task_name"]."</td>";
            echo "<td>".$values["Frequency"]."</td>";
            echo "<td>".$values["Unit"]."</td>";
            echo "<td>".$values["Stakeholder"]."</td>";
            echo "<td>".$values["Funtional_owner"]."</td>";
            echo "<td>".$values["Approval"]."</td>";
            if($values[$seclast] == 'Done'){
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else {
                $id = $values["id"];
                echo "<td><input onChange='updateWeek($id , $secound_last)' type='checkbox'></td>";
            }

            if($values[$lastweek] == 'Done'){
                
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else{
                $id = $values["id"];
                // echo gettype($taskname);
                // echo $taskname;
                echo "<td><input onChange='updateWeek($id , $last_week)' type='checkbox'></td>";

            }
            if($values[$recenttweek] ==  'Done'){
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else  {
                $id = $values["id"];
                echo "<td><input onChange='updateWeek($id , $recentt_week)' type='checkbox'></td>";
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
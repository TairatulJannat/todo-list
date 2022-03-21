<?php
require_once("controlar/filtertablecontrolar.php");
$key=$_REQUEST["key"];

$userid=$_REQUEST["id"];
$type=$_REQUEST["type"];
$quater="Q".$_REQUEST["quaterno"]."'".date("y", strtotime(date('Y-m-d')));
// print_r($key  ) ;
// print_r($userid );
// print_r( $type  ) ;
// print_r($week ) ;
?>

<?php
if($type == 'quaterly'){
    $query="UPDATE `quartly_list` SET `$quater`='Done' WHERE id='$userid'";
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
                
                <th>Q    
                <?php
                    $quarter = ceil(date('n', time()) / 3)+2;
                     echo $quarter; // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th>
              
                <th>Q 
                
                <?php
                    $quarter = ceil(date('n', time()) / 3)+1;
                    echo $quarter; // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th> <th>Q
                
                <?php
                   $quarter = ceil(date('n', time()) / 3);
                //    $month = date('n');
                    echo $quarter; // gives 201101
                ?>'
                <?php
                    echo date("y", strtotime(date('Y-m-d'))); // gives 201101
                ?>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($type == 'quaterly'){
            $value=filtertable($key , $type);
            $last_quater = ceil(date('n', time()) / 3)+2;
            $secound_last_quater = ceil(date('n', time()) / 3)+1;
            $recentt_quater=ceil(date('n', time()) / 3);
        $recenttqauter="Q".$recentt_quater."'".date("y", strtotime(date('Y-m-d')));
        $lastquater="Q".$last_quater."'".date("y", strtotime(date('Y-m-d')));
        $seclast_quater="Q".$secound_last_quater."'".date("y", strtotime(date('Y-m-d')));
        
        foreach($value as $values){
            
            echo "<tr>";
            echo "<td>".$values["Task_name"]."</td>";
            echo "<td>".$values["Frequency"]."</td>";
            echo "<td>".$values["Unit"]."</td>";
            echo "<td>".$values["Stakeholder"]."</td>";
            echo "<td>".$values["Funtional_owner"]."</td>";
            echo "<td>".$values["Approval"]."</td>";
            if($values[$lastquater] ==  'Done'){
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else  {
                $id = $values["id"];
                echo '<td><input onChange="updatequater(' . $id . ' ,' . "'$last_quater'" . ')" type="checkbox"></td>';
            }


            if($values[$seclast_quater] == 'Done'){
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else {
                $id = $values["id"];
                // echo '<td><input onChange="updatemonth(' . $id . ' ,' . "'$seclast_month'" . ')" type="checkbox"></td>';
                echo '<td><input onChange="updatequater(' . $id . ' ,' . "'$secound_last_quater'" . ')" type="checkbox"></td>';
            }

            if($values[$recenttqauter] == 'Done'){
                
                echo "<td><p style ='color:green'>Done</p></td>";
            }
            else{
                $id = $values["id"];
                // echo gettype($taskname);
                // echo $taskname;
                echo '<td><input onChange="updatequater(' . $id . ' ,' . "'$recentt_quater'" . ')" type="checkbox"></td>';

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
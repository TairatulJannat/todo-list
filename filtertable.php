<?php
require_once("controlar/filtertablecontrolar.php");
$key=$_REQUEST["key"];

$userid=$_REQUEST["id"];
$type=$_REQUEST["type"];


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
              <?php if($type == 'weekly') 
                {
                ?>
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
                <?php
                 }
                 ?>
            

             <?php  if($type == 'monthly') 
                {
              ?>
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
               
                <?php
                }
                ?>

              <?php  if($type == 'quaterly') 
                {
              ?>
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

              
               
                <?php
                }
                ?>
                <?php  if($type == 'yearly') 
                {
                ?>
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
                    echo date("Y"); // gives 201101
                ?>
                </th>

              
               
                <?php
                }
                ?>
                
                
               
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
            
        </tbody>
        <?php
        }
        ?>

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
                echo '<td><input onChange="updateyear(' . $id . ' ,' . "'$lastyear'" . ')" type="checkbox"></td>';

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
            
        </tbody>
        <?php
        }
        ?>

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
            
        </tbody>
        <?php
        }
        ?>
    </table>
    
</section>

<style>
 .py-5 {
	/* padding-top: 3rem!important; */
	padding-bottom: 0rem!important;
	}
</style>

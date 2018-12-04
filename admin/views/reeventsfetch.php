<?php

include('dbconnect.php');


 $sql = "select * from eevent where reqevent='1' " ;

$q = $conn->query($sql);





for ($i=0; $i < $q->num_rows ; $i++) { 
    # code...
$res = $q->fetch_assoc();

?>
                    <tr>
                        
                        <td><?php echo $res['edesc']; ?></td>
						<td><?php if($res['ntype']=='0'){ echo "No";}else{ echo $res['ntype'];} ?></td>
                        <td><?php echo $res['estate']; ?></td>
                        <td><?php echo $res['ecity']; ?></td>
                        <td><?php echo $res['dadd']; ?></td>
                        <td><?php echo $res['adharno']; ?></td>
						<td><?php echo $res['mobno']; ?></td>
                        <td><?php echo $res['datetime']; ?></td>
						<td class="send"><div><a href="sendemsg.php?send=<?php echo $res['id']; ?>" >Send</a></div></td>
                        
                        

                    </tr>


<?php

}


?>                                  


<style type="text/css">
    .send a
    {
        text-decoration: none;
        color: white;

    }

    .send div
    {
        background-color: #1F91F3;
        padding: 5px 10px 5px 10px;
        
        
        text-align: center;
        border: none;
    }
</style>


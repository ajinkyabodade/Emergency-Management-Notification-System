<?php





 $sql = "select * from eevent where reqevent='0' " ;

$q = $conn->query($sql);





for ($i=0; $i < $q->num_rows ; $i++) { 
    # code...
$res = $q->fetch_assoc();

?>
                    <tr>
                        
                        <td><?php echo $res['edesc']; ?></td>
                        <td><?php echo $res['estate']; ?></td>
                        <td><?php echo $res['ecity']; ?></td>
                        <td><?php echo $res['dadd']; ?></td>
                        <td><?php echo $res['adharno']; ?></td>
                        <td><?php echo $res['datetime']; ?></td>
                        
                        

                    </tr>


<?php

}


?>                                  





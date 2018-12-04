<?php
include('dbconnect.php');
include('checklogin.php');




$sql = "select * from adminlogin ";

$q = $conn->query($sql);

for ($i=0; $i < $q->num_rows ; $i++) { 
    # code...

$res = $q->fetch_assoc();
?>
                    <tr>
                        <th scope="row"><?php echo $i+1; ?></th>
                        <td><?php echo $res['fname']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['mobno']; ?></td>
                        <td class="delete"><div><a href="deleteadmin.php?id=<?php echo $res['id']; ?>" >Delete</a></div></td>
                        

                    </tr>


<?php

}


?>                                  




<style type="text/css">
    .delete a
    {
        text-decoration: none;
        color: white;

    }

    .delete div
    {
        background-color: #1F91F3;
        padding: 5px 10px 5px 10px;
        width: 50%;
        margin: auto;
        text-align: center;
        border: none;
    }
</style>
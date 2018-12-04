<?PHP

 include('dbconnect.php');
 include('checklogin.php');
             

                 $id=$_GET['id'];

                  $sql20 = "DELETE FROM adminlogin WHERE id=$id";

			$conn->query($sql20);
?>
			<script type="text/javascript">window.location='manageauth.php';</script>	
    
   



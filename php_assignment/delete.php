<?php
if(isset($_GET['id']) && $_GET['id']!=''){
    include('function.php');
    include('db_conn.php');
    $id=$_GET['id'];
    $sql="delete from tb_employee where id='$id'";
    $res=mysqli_query($conn,$sql) or die('Error deleting the employee'.mysqli_error($conn));
    $affected_row = mysqli_affected_rows($conn);
    if($affected_row>0){
        echo "<script>
        alert ('Data Deleted Successfully.')
       window.location='2.php';
        </script>";
    }
    else {
        notify('Somethimg Went Wrong!');
        redirectTO('2.php');
    }
}




?>
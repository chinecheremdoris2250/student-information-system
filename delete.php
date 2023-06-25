<?php
include 'search.php';
?>
<?php
include 'student_db.php';

if($_GET['student_id']){
    $user_id=$_GET['student_id'];
    $sql="DELETE FROM user WHERE id='$user_id' ";
    $result=mysqli_query($data,$sql);
    if($result){
        echo "<script type='text/javascript'>
        alert('Delete Student is Successful');
         </script";
        // $_SESSION['message']='Delete Student is Successful';
        header("location:firstyear.php");
    }
}


?>
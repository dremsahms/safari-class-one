<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:52 AM
 */

if (isset($_POST['x'])){
    extract($_POST);
    $conn = mysqli_connect("localhost","root","","safari");
    if (!$conn){
        echo "Failed to connect to DB";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$x','$y','$z')");
        if (!$insert){
            echo "Saving Failed";
        }else{
            echo "$x Saved Successfully";
        }
    }
    header("location:viewUsers.php");
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:52 AM
 */

if (isset($_POST['id'])){
    extract($_POST);
    $conn = mysqli_connect("localhost","root","","safari");
    $update = mysqli_query($conn,"UPDATE `majina` SET `jina`='$name',`arafa`='$email',`siri`='$pass' WHERE id=$id");
    header("location:viewUsers.php");
}
?>
<?php
session_start();
$mysql = mysqli_connect("localhost", "root", "", "diuproject");
if (isset($_GET['uid'])){
    $id = $_GET['uid'];
    $sqliMentorDelete ="DELETE FROM mentor_account WHERE id ='$id'";
    $queryMentorDelete =mysqli_query($mysql,$sqliMentorDelete);
    if ($queryMentorDelete){
        header('location:../mentorUser.php');
    }
}
?>

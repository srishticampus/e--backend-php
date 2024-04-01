<?php
require "connection.php";

if (isset($_POST['deleteBtn'])){
    $recordIds = $_POST['check'];
    //$common = new Common();
    foreach ( $recordIds as $id ) {
        $delete = "delete from history where his_id=$id";
        $result=$con->query($delete);
    }
    if ($result) {
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="index.php";</script>';
    }
}
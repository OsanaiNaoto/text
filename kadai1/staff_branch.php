<?php

if(isset($_POST['edit'])==true)
{
    $id  = $_POST["id"];
    $name= $_POST["name"];
    $name_letter = $_POST["name_letter"];
    $address_num = $_POST["address_num"];
    $address = $_POST["address"];
    $phone_num = $_POST["phone_num"];
    $mail = $_POST["mail"];
    header('Location: data_edit.php?id='.$id);
    exit;
}
if(isset($_POST['delete'])==true)
{
    $id  = $_POST["id"];
    $name= $_POST["name"];
    $name_letter = $_POST["name_letter"];
    $address_num = $_POST["address_num"];
    $address = $_POST["address"];
    $phone_num = $_POST["phone_num"];
    $mail = $_POST["mail"];
    header('Location: data_delete.php?staffcode='.$staff_code);
    exit;
}

?>
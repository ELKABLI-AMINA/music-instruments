<?php

include("connexion.php");
session_start();

if (isset($_POST['sign-up']))        signup($con);
if (isset($_POST['sign-in']))        signin($con);
if (isset($_POST['add']))            add($con);
if (isset($_POST['display']))       display($con);
if (isset($_POST['delete']))         delete($con);
if (isset($_POST['edit']))         update($con);



function signup($con)
{
    $firstname           = $_POST["firstname"];
    $lastname            = $_POST["lastname"];
    $emailaddress        = $_POST["emailaddress"];
    $password            = $_POST["password"];
    $retypepassword      = $_POST["retypepassword"];

    if ($password == $retypepassword) {
    } else {

        header('location:index.php');
    }

    $sql = "INSERT INTO  admins( first_name, last_name,email, password,image)
    VALUES ('$firstname', '$lastname','$emailaddress' ,'$password','connecter.jpg')";
    $query = mysqli_query($con, $sql);

    if (isset($query)) {
        $sqli = "SELECT * FROM admins WHERE email ='$emailaddress' AND password ='$password' ";
        $result = mysqli_query($con, $sqli);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["admin_id"] = $row["id"];
            $_SESSION["admin_first"] = $row["first_name"];
            $_SESSION["admin_last"] = $row["last_name"];
            $_SESSION["admin_email"] = $row["email"];
            $_SESSION["admin_password"] = $row["password"];
            $_SESSION["admin_image"] = $row["image"];

            header('location: dashboard.php');
        }
    } else {
        echo "<h1> erreur d'insertion</h1>";
    }
}

function signin($con)
{

    $emailaddressi        = $_POST["emailaddressi"];
    $passwordi            = $_POST["passwordi"];

    $sql = "SELECT * FROM admins WHERE email ='$emailaddressi' AND password ='$passwordi' ";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["admin_id"] = $row["id"];
        $_SESSION["admin_first"] = $row["first_name"];
        $_SESSION["admin_last"] = $row["last_name"];
        $_SESSION["admin_email"] = $row["email"];
        $_SESSION["admin_password"] = $row["password"];
        $_SESSION["admin_image"] = $row["image"];
        setcookie("email", $emailaddressi, time() + 3600);
        setcookie("password", $passwordi, time() + 3600);


        header("location:dashboard.php");
    } else {
        header("location:index.php");
    }
}
function add($con)
{

    $name                  = $_POST["name"];
    $description           = $_POST["description"];
    $price                 = $_POST["price"];
    $quantity              = $_POST["quantity"];
    $id_admin              = $_SESSION["admin_id"];
    $image                 = $_FILES["image"]["name"];
    $target                = "img/" . $image;
    $sourcepath            = $_FILES["image"]["tmp_name"];
    move_uploaded_file($sourcepath, $target);
    $sql = "INSERT INTO instruments(	name , description,	price,	quantity,image,id_admin) VALUES ('$name','$description','$price','$quantity','$image','$id_admin')";
    $query = mysqli_query($con, $sql);
    if (isset($query)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
function display($con)
{
    $admin_id = $_SESSION["admin_id"];
    $sql = "SELECT * FROM instruments where id_admin = '$admin_id'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function delete($con)
{
    $id = $_POST['id'];
    $sql = "DELETE FROM instruments WHERE  id=$id";
    if (mysqli_query($con, $sql)) {
    } else {
        echo $con->error;
    }
}
function update($con)
{
    $id                    = $_POST["id_i"];
    $name                  = $_POST["name"];
    $description           = $_POST["description"];
    $price                 = $_POST["price"];
    $quantity              = $_POST["quantity"];
    $id_admin              = $_SESSION["admin_id"];
    $image                 = $_FILES["image"]["name"];
    if ($image == "") {
        $image = $_POST["tmp_image"];
    }
    $target                = "img/" . $image;
    $sourcepath            = $_FILES["image"]["tmp_name"];
    move_uploaded_file($sourcepath, $target);
    $sql = "UPDATE `instruments` SET `name`='$name',`description`='$description',`price`='$price',`quantity`='$quantity',`image`='$image',`id_admin`='$id_admin' WHERE id = '$id'";
    $query = mysqli_query($con, $sql);
    if (isset($query)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
function display_Admins($con)
{
    $sql = "SELECT * FROM Admins ";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function compteurInstru($con)
{
    $admin_id = $_SESSION["admin_id"];
    $sql = "SELECT count(id) FROM instruments where id_admin = '$admin_id'";
    $result = $con->query($sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}
function compteurAdmins($con)
{
    $admin_id = $_SESSION["admin_id"];
    $sql = "SELECT count(id) FROM admins";
    $result = $con->query($sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

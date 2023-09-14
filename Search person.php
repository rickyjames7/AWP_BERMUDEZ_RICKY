<?php
include("DB_Config.php");


$Person_Id = "Person_Id";
$Last_Name = "Last_Name";
$First_Name = "First_Name";
$Middle_Name = "Middle_Name";
$Extension_Name = "extension_Name";
$Sex = "sex";
$Birth_Date = "birth_Date";
$Age = "age";
$Home_Address = "home_Address";
$Civil_Status = "civil_Status";
$Nationality = "nationality";
$Religion = "religion";
$Boarding_Address = "boarding_Address";
$Contact_Number = "contact_Number";
$Email_Address = "email_Address";



if (array_key_exists('search_user', $_POST)) {
    $Person_Id = $_POST['Person_Id'];

    // Corrected SQL query with SELECT instead of SEARCH
    $SearchUserAccountQuery = "SELECT * FROM person WHERE Person_Id = '$Person_Id'";

    // Execute the SQL query and check if it was successful
    $result = $db_connect->query($SearchUserAccountQuery);

    if ($result) {
    // Fetch the user account data
    while ($row = mysqli_fetch_object($result)) {
    // Values for 'username' and 'password' are taken from the query result 
    $Last_Name = $row->Last_Name;
    $First_Name = $row->First_Name;
    $Middle_Name = $row->Middle_Name;
    $Extension_Name = $row->Extension_Name;
    $Sex = $row->Sex;
    $Birth_Date= $row->Birth_Date;
    $Age = $row->Age;
    $Home_Address = $row->Home_Address;
    $Civil_Status = $row->Civil_Status;
    $Nationality = $row->Nationality;
    $Religion = $row->Religion;
    $Boarding_Address = $row->Boarding_Address;
    $Contact_Number = $row->Contact_Number;
    $Email_Address = $row->Email_Address;
    }

    } else {
    echo "Error executing the query: " . $db_connect->error;
    }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="Person_Id" name="Person_Id">
        <label for="Person_Id">Person ID</label><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>
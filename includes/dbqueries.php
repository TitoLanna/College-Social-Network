<?php
//Creates the database
function CreatecollegenetDB(){
    require 'dbh.inc.php';
$sql = "CREATE DATABASE collegenet";

    if (mysqli_query($conn, $sql)) {
       echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
}

//Creates the User Info table
function CreateuserTB(){
     require 'dbh.inc.php';
$sql=" CREATE TABLE users(
    idUsers int AUTO_INCREMENT PRIMARY KEY not null,
    uidUsers TINYTEXT not null,
    pwdUsers LONGTEXT not null,
    refnum int not null,
    phone int not null,
    gender TINYTEXT not null,
    emailUsers TINYTEXT NOT NULL,
    verified TINYINT NOT NULL,
    token INT NOT NULL,
    usrimg LONGBLOB
);";
 if (mysqli_query($conn, $sql)) {
       echo "User Table created successfully";
    }
}

//Creates the department table
function CreatedepartmentTB(){
     require 'dbh.inc.php';
$sql="CREATE TABLE department(
    department_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    department_name CHAR(40) NOT NULL
);";
 if (mysqli_query($conn, $sql)) {
       echo "Department Table created successfully";
    }
}

//Creates Department Class Table
function CreatedepartmentclassTB(){
     require 'dbh.inc.php';
$sql="CREATE TABLE departmentclass(
    dep_class_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Class_id INT NOT NULL,
    department_id INT NOT NULL

);";
 if (mysqli_query($conn, $sql)) {
       echo "Departmentclass created successfully";
    }
}
//Creates class table
function CreateclassTB(){
     require 'dbh.inc.php';
$sql="CREATE TABLE Class(
    Class_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Class_name CHAR(40) NOT NULL
);";
 if (mysqli_query($conn, $sql)) {
       echo "Class Table created successfully";
    }
}
//Creates Post Table
function CreatePostTB(){
     require 'dbh.inc.php';
$sql="CREATE TABLE Post(
    Post_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Post_msg VARCHAR (500),
    user_id char,
    Post_image LONGBLOB
);";
 if (mysqli_query($conn, $sql)) {
       echo "Post Table created successfully";
    }
}
//Create Chat Table
function createChatTB(){
     require 'dbh.inc.php';
    $sql=" CREATE TABLE Chat(
        Chat_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        MSG VARCHAR(500) NOT NULL
    );";
     if (mysqli_query($conn, $sql)) {
       echo " Chat Table created successfully";
    }
}

// CreatecollegenetDB();
CreateuserTB();
// CreatedepartmentTB();
// CreatedepartmentclassTB();
// CreateclassTB();
// CreatePostTB();
// CreateChatTB();
?>

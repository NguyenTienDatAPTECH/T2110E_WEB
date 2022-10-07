<?php

require 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];

    if (!empty($name) && !empty($age) && !empty($address) && !empty($telephone)) {
        $sql = "INSERT INTO `student` (`name`, `age`, `address`, `telephone`) VALUES(?,?,?,?)";

        $pdo_stm = $conn->prepare($sql);
        $pdo_stm->bindParam(1, $name);
        $pdo_stm->bindParam(2, $age);
        $pdo_stm->bindParam(3, $address);
        $pdo_stm->bindParam(4, $telephone);

        $result = $pdo_stm->execute();
        if ($result) {
            echo '<h3>Add new student success.!</h3>';
            echo '<a href="list-student.php">Go to list</a>';
        } else {
            echo '<h3>Add new student failed.!</h3>';
            echo '<a href="create-student.php">Go to form add</a>';
        }
    } else {
        echo '<h3>Please review all field.!</h3>';
        echo '<a href="create-student.php">Go to form add</a>';
    }
} else {
    echo '<h3>Not data.!</h3>';
    echo '<a href="create-student.php">Go to form add</a>';
}
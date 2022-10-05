<?php
echo "Running!!!";
$connection = mysqli_connect('127.0.0.1', 'root', '', 'book_db');
echo "Running Again!!!";
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = " INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
    mysqli_query($connection, $request);

    header('location:book.php');
} else {
    echo 'something went wrong please try again!';
}

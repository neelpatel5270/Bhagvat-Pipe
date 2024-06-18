<?php
$conn = mysqli_connect('localhost', 'root', '', 'bhgvat_contact');
if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contactus` WHERE name = '$name' AND email = '$email' AND phonenumber = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO `contactus`(id, name, email, phonenumber, message,date,status) VALUES(NULL, '$name', '$email', '$number', '$msg',NULL,'active')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <a href="index.php  "><button class="send"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back To Home</button></a>
        <h1> Contact Us </h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="number">Mobile Number:</label>
                <input type="number" maxlength="10" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <!-- <input type="submit" value="send message" name="send" class="btn"> -->
                <button class="sub" type="submit" name="send">SUBMIT &nbsp;<i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </form>
    
    </div>
</body>


</html>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background: rgb(231, 196, 55);
        background: linear-gradient(21deg, rgba(231, 196, 55, 1) 0%, rgba(73, 155, 255, 1) 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        max-width: 600px;
        width: 100%;
        text-align: center;
    }

    h1 {
        color: #333;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }

    input,
    textarea {
        width: calc(100% - 20px);
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        background-color: #f5f5f5;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    input:focus,
    textarea:focus {
        outline: none;
        background-color: #e0e0e0;
    }

    .sub {
        background-color: #ff5a5f;
        color: white;
        padding: 12px 30px;
        font-size: 18px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .send {
        background-color: #e7c437;
        color: black;
        padding-left: 50px;
        padding: 12px 30px;
        font-size: 18px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        transition: background 0.3s ease;
        justify-content: flex-start;
    }

    a {
        padding-right: 650px;
    }

    button:hover {
        background-color: #e74c4f;
    }
</style>
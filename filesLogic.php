<?php


// Localhost Database connection
$conn = mysqli_connect('localhost', 'root', '', 'db_contact');

// Remote Database Connection
// $server_name = "remotemysql.com";
// $db_username = " jJINFaqynM";
// $db_password = "M8zPf37EvR";
// $db_name = "jJINFaqynM";
// $db_port = "3306";

// Remote Ddatabase Connection
// $con = mysqli_connect($server_name,$db_username,$db_password,$db_name,$db_port);


$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    
    // Contact Information
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Position
    $position = $_POST['position'];
    $portfolio = $_POST['portfolio'];
    $salary = $_POST['salary'];
    $starting_date = $_POST['starting_date'];
    $company = $_POST['company'];
    $relocate_data = $_POST['data_14'];

    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'txt', 'tex', 'png', 'jpg', 'jpeg', 'doc', ])) {
        echo "You file extension must be .zip, .pdf, .txt, .tex, .png, .jpg, .jpeg, .doc or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000000000000) { // file shouldn't be larger than 10^15 = 1ZB
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files ( `first_name`, `middle_name`, `last_name`, `email`, `phone`, `position`, `portfolio`, `salary`, `starting_date`, `company`, `data_14`, `name`, `size`) VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$phone', '$position', '$portfolio', '$salary', '$starting_date', '$company', '$relocate_data', '$filename', $size)";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['status'] = "Your message is Sent successfully..!!";
                $_SESSION['status_code'] = "success";
                $_SESSION['message'] = "Your message is Sent successfully..!!";
                header('Location: career.php');
            }
        } else {
            $_SESSION['status'] = "Your message is not Sent successfully..!!";
            $_SESSION['status_code'] = "error";
            $_SESSION['message'] = "Your message is not Sent successfully..!!";
            header('Location: contact.php');
        }
    }
}


?>


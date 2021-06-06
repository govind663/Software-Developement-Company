<?php
include('security.php');


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'db_contact');



// ..... Contact Us 


if(isset($_POST['Sent_message']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['phone'];
  $message = $_POST['message'];

  $query = "INSERT INTO `tbl_contact`( `name`, `email`, `phone`, `message`)
  VALUES ('$name','$email','$subject','$message')";
  $query_run = mysqli_query($db, $query);

  if($query_run)
  {
    $_SESSION['status'] = "Your message is Sent successfully..!!";
    $_SESSION['status_code'] = "success";
    $_SESSION['message'] = "Your message is Sent successfully..!!";
    header('Location: contact.php');
  }
  else
  {
    $_SESSION['status'] = "Your message is not Sent successfully..!!";
    $_SESSION['status_code'] = "error";
    $_SESSION['message'] = "Your message is not Sent successfully..!!";
    header('Location: contact.php');
  }
}

// ..... Newsletter or Subscribe  

if(isset($_POST['Sent_message1']))
{
 
  $email = $_POST['email'];
 
  $query = "INSERT INTO `newsletter`( `email`) VALUES ('$email')";  
  $query_run = mysqli_query($db, $query);

  if($query_run)
  {
    $_SESSION['status'] = "Your message is Sent successfully..!!";
    $_SESSION['status_code'] = "success";
    $_SESSION['message'] = "Your message is Sent successfully..!!";
    header('Location: contact.php');
  }
  else
  {
    $_SESSION['status'] = "Your message is not Sent successfully..!!";
    $_SESSION['status_code'] = "error";
    $_SESSION['message'] = "Your message is not Sent successfully..!!";
    header('Location: contact.php');
  }
}


?>

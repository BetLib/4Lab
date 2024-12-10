<?php
if(isset( $_POST['btn_send']))
{  if (!empty($_POST['message'])) {
    echo '<script>alert("The message has been sent")</script>';
    echo "<script>window.location.href='http://localhost/lab2/'</script>";
}   
else {
        echo '<script>alert("The message has NOT been sent")</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Test Response</title>
  <style>
    body {
      font-family: Arial;
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    input {
      width: 300px;
      padding: 10px;
      margin: 10px;
    }
    button {
      width: 100px;
      padding: 10px;
      margin: 10px;
      background-color: #008CBA;
      color: #fff;
      border: none;
      cursor: pointer;
    }
    #messages {
      width: 300px;
      padding: 10px;
      margin: 10px;
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>
  <form id="form" method="POST" action="">
    <input type="text" name="message" placeholder="Enter a message">
    <button name ="btn_send" type="submit">Send</button>
  </form>
  <div id="messages"></div>
</body>
</html>
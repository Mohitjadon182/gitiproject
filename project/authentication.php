<?php  
    
    $host = "127.0.0.1";
     $username = "root";
     $pass = "";
     $db = "lms_db";
    $conn = new mysqli($host, $username, $pass, $db);
    
    
// Taking all 3 values from the form data(input)

   
    $stuname = $_POST['stuname'];
    $stuemail1 = $_POST['stuemail'];
    $stupass = $_POST['stupass'];
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    //Insert Query of SQL
    $sql = "INSERT INTO regis (stuname, stuemail, stupass) VALUES ('$stuname', '$stuemail1', '$stupass' )";
    

    if ($conn->query($sql) === TRUE) {
        echo "Registered successfully";
        header ("refresh:0,url=index.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
    
  ?>
         
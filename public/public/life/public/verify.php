<?php
if(isset($_GET['vkey'])){
    //Process Verification
    $vkey = $_GET['vkey'];
    
    $mysqli = NEW MySQLi('localhost', 'root', '','test');
    
    $resultSet = $mysqli->query("SELECT verified, vkey FROM accounts WHERE verified = 0 AND vkey = '$vkey' LIMIT 1"); 
    
    if($resultSet->num_rows == 1){
        //Validate the Email
        $update = $mysqli->query("UPDATE ACCOUNTS SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
        
        if($update){
            echo "Your account has been verified. You may now login.";
        }else{
            echo $mysqli->error;
        }
    }else{
        echo "This account is invalid or already verified";
    }
}else{
    die("Something went wrong");
}
?>
<html>
<head>
   <link href="style.css" rel="stylesheet" type="text/css" /> 
    </head>
<body>
    <center>
    
    
    </center>
    
    </body>    

</html>
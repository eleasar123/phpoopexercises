<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <div>
        <form method="POST">
            <label>Email Address</label>
            <input type="text" name="emailAddress" id="">
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    <?php

//Write a class that accepts a user input and checks if the user input is a valid email address.
class EmailAddress{
    public $email;
    public $regex= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
    public function validateEmailAddress(){

         if(isset($_POST['submit'])){
            $email=$_POST['emailAddress'];
            echo $email;
           
            if(preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email)){
                echo " Valid Email Address";
            }else{
                echo "<h4 style='color:black'>Invalid email address</h4>";
            }
         }
        
    }

}

$newEmail=new EmailAddress();

$newEmail->validateEmailAddress();

?>
</body>
</html>

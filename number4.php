<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        input,label{
            margin:10px;
        }
    </style>
</head>
<body>
<div class="container" style="width:30vw;margin-left:auto;margin-right:auto;">
    <div class="card" style="margin: 20px;background-color:yellowgreen;padding:30px;border-radius:20%;">
        <h1>Form Validation PHP</h1>
        <form method="post"class="form-group" style="padding: 20px;">
            <label>Name</label><br>
            <input type="text" name="name"><br>
            <label>Address</label><br>
            <input type="text" name="address"><br>
            <label>Age </label><br>
            <input type="text" name="age"><br>
            <label>Contact Number</label><br>
            <input type="text" name="contact"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>

<?php
//Write a class that checks a passed form, and verifies if the form contains a field for name,
// address, age, and contact number. Once verified, display the said form with the input values in the page.


class formValidation{
    public function validateForm(){
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $address=$_POST['address'];
            $age=$_POST['age'];
            $contact=$_POST['contact'];
            if($name!="" && $address!="" && $age!="" && $contact!=""){
                echo "Username: ".$name;
                echo "<br>Address: ".$address;
                echo "<br>Age: ".$age;
                echo "<br>Contact Number: ".$contact;
            }else{
                echo "<p>Invalid</p>";
            } 
        }
    }
}
$newForm=new formValidation();
$newForm->validateForm();

?>   

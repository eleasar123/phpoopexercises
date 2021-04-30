<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <div class="">
        <form id="submitForm" method="POST">
            <label for="" class="date1">Enter first date</label><br>
            <input type="text" name="date1" value="2013-09-04"><br>
            <label for="" class="date2">Enter second date</label><br>
            <input type="text" name="date2" value="1981-11-03"><br>
            <button type="button" name="submit">Submit</button>
        </form>
    </div>

<?php

//Calculate the difference between two dates using PHP OOP approach.
//Sample Dates : 1981-11-03, 2013-09-04
//Expected Result : Difference : 31 years, 10 months, 1 days
class Date{


    public function subtractDate($date1, $date2){
        $date1=new DateTime($date1);
        $date2=new DateTime($date2);
        $diff=$date1->diff($date2);
       
        echo "Difference: " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days "; 
    }

    // function c(){
    //     $this->subtractDate("2013-2-23", "2001-01-03");
    // }     
}

$newDate= new Date();
$newDate->subtractDate("2013-09-04", "1981-11-03");
echo "here";
if(isset($_POST['submit'])){
    echo 'reached';
    $dateOne=$_POST['date1'];
    $dateTwo=$_POST['date2'];
    $newDate->subtractDate($dateOne, $dateTwo);  
}


?>
</body>
</html>
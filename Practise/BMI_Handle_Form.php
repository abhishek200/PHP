<?php
$height = $_POST['height'];
$weight = $_POST['weight'];

$bmi = $weight / $height / $height;

print "<p>Your Height is: $height <br>
          Your weight is: $weight <br>
          Your BMI is: $bmi <br>
          Classification: ";

if ($bmi < 18.5){

    print " UnderWeight";

}elseif ($bmi < 24.9){

    print " Normal Weight";

}elseif ($bmi < 29.9){

    print " Overweight";

}elseif ($bmi < 34.9){

    print " Obese";

} 
print "</p>";

print "<a href='/BMI_Form.html'>Click here to try again!</a>";
?>
<html>
<body>
 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }

        h1, h2 {
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #d1e7dd;
        }

        .result {
            font-size: 18px;
            margin: 10px 0;
        }

        .macronutrients {
            font-weight: bold;
        }
</style>
<?php
$b=$_POST['bodyweight'];
$h=$_POST['height'];
$a=$_POST['Age'];
$g=$_POST['gender'];
$act=$_POST['activitylevel'];
$wlg=$_POST['weightlg'];
$n=$_POST['g'];
if($n==2){
$bmi=$b*10000/$h**2;
$bmi=$bmi+0;
echo"YOUR BMI IS $bmi";
echo"<br>";
if ($bmi<18.5){
echo"You are underweight";
}
elseif($bmi>18.5 and $bmi<24.9){
echo"You are of normal weight";
}
elseif($bmi>25 and $bmi<29.9){
echo"You are overweight";
}
else{
echo"You have obesity";
}
echo"<br>";
if($g==1){
$bmr=10*$b+6.25*$h-5*$a+5;
echo "YOUR BMR IS $bmr";
}
else{
$bmr=10*$b+6.25*$h-5*$a-161;
echo $bmr;
}
$tree=$bmr*$act;
echo"<br>";
if ($wlg==1){
$caloriedefict=$tree-1000;
}
else{
$caloriedefict=$tree-500;
}

echo"YOUR CALORIE DEFIECT IS $caloriedefict";   
$p=$caloriedefict*30/100;
$f=$caloriedefict*20/100;
$c=$caloriedefict*45/100;  

$protein = (double) ($p / 4); 
$fat = (double) ($f / 9); 
$carbs = (float) ($c / 4); 

echo "<br><br>";
echo "Macronutrients intake:";   
}
else{
$bmi=$b*10000/$h**2;
$bmi=$bmi+0;
echo"YOUR BMI IS $bmi";
echo"<br>";
if ($bmi<18.5){
echo"You are underweight";
}
elseif($bmi>18.5 and $bmi<24.9){
echo"You are of normal weight";
}
elseif($bmi>25 and $bmi<29.9){
echo"You are overweight";
}
else{
echo"You have obesity";
}
echo"<br>";
if($g==1){
$bmr=10*$b+6.25*$h-5*$a+5;
echo "YOUR BMR IS $bmr";
}
else{
$bmr=10*$b+6.25*$h-5*$a-161;
echo $bmr;
}
$tree=$bmr*$act;
echo"<br>";
if ($wlg==1){
$caloriedefict=$tree+1100;
}
else{
$caloriedefict=$tree+550;
}

echo"YOUR CALORIE DEFIECT IS $caloriedefict";   
$p=$caloriedefict*30/100;
$f=$caloriedefict*20/100;
$c=$caloriedefict*45/100;  

$protein = (double) ($p / 4); 
$fat = (double) ($f / 9); 
$carbs = (float) ($c / 4); 

echo "<br><br>";
echo "Macronutrients intake:";
echo"loading";
}     
?> 

<table border="1">
    <tr>
        <th>Protein</th>
        <th>Fat</th>
        <th>Carb</th>
        <th>Fibre</th>
    </tr>
    <tr>
        <td><?php echo "" . number_format($protein, 1) . " g"; ?></td>
        <td><?php echo "" . number_format($fat, 1) . " g"; ?></td>
        <td><?php echo "" . number_format($carbs, 1) . " g"; ?></td>
        <td><?php echo "30 g"; ?></td>
    </tr>
    </table>
</body>
</html>
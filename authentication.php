<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4; /* Light grey background */
            color: #000; /* Black text */
            margin: 0;
            padding: 0;
            height: 100vh; /* Full viewport height */
            display: flex;
            justify-content: flex-start; /* Align to the left */
            align-items: flex-start; /* Align to the top */
            padding: 20px; /* Padding around the edges */
        }

        h1 {
            color: #333; /* Darker color for heading */
            margin-bottom: 20px;
            font-size: 2.5em; /* Larger font size for title */
        }

        form {
            background-color: white; /* White background for the form */
            border-radius: 10px; /* Rounded corners */
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2); /* Shadow effect */
            width: 350px; /* Fixed width for form */
            margin: 20px; /* Margin around the form */
        }

        label {
            font-size: 1.1em; /* Slightly larger label text */
            margin-top: 15px;
            display: block; /* Block display for labels */
            color: #555; /* Darker text for labels */
        }

        input[type="text"], input[type="radio"] {
            margin: 10px 0;
            padding: 12px; /* Padding for input fields */
            width: calc(100% - 24px); /* Full width minus padding */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Include padding in width */
            font-size: 1em; /* Increase font size */
        }

        input[type="radio"] {
            width: auto; /* Width auto for radio buttons */
            margin-right: 10px; /* Space between radio button and label */
        }

        input[type="submit"] {
            background-color: #3498db; /* Button color */
            color: white;
            border: none;
            padding: 12px 20px; /* Button padding */
            border-radius: 5px;
            cursor: pointer;
            width: 100%; /* Full width for button */
            font-size: 1.2em; /* Increase font size */
            transition: background-color 0.3s, transform 0.2s; /* Transition for hover effect */
        }

        input[type="submit"]:hover {
            background-color: #2980b9; /* Darker button color on hover */
            transform: scale(1.05); /* Slight zoom effect on hover */
        }

        .radio-group {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
include('connection.php');
$userid = $_POST['userid'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE userid='$userid' AND password='$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<h1>Login Successful</h1>";
    ?>
    <form name="f1" action="data.php" method="POST">
        <label>Body weight in kg:</label>
        <input type="text" name="bodyweight" required><br>
        
        <label>Height in cm:</label>
        <input type="text" name="height" required><br>
        
        <label>Age in years:</label>
        <input type="text" name="Age" required><br>
        
        <label>Gender:</label><br>
        <div class="radio-group">
            <input type="radio" name="gender" value="1" required> Male
            <input type="radio" name="gender" value="2" required> Female
        </div>
        
        <label>Weight loss or gain:</label><br>
        <div class="radio-group">
            <input type="radio" name="g" value="1" required> Gain<br>
            <input type="radio" name="g" value="2" required> Loss<br>
        </div>

        <label>Weight loss or gain duration:</label><br>
        <div class="radio-group">
            <input type="radio" name="weightlg" value="1" required> 1 kg in a week<br>
            <input type="radio" name="weightlg" value="0.5" required> 0.5 kg in a week<br>
        </div>

        <label>Activity level:</label><br>
        <div class="radio-group">
            <input type="radio" name="activitylevel" value="1.2" required> Sedentary (little or no exercise)<br>
            <input type="radio" name="activitylevel" value="1.375" required> Lightly active (light exercise/sports 1-3 days/week)<br>
            <input type="radio" name="activitylevel" value="1.55" required> Moderately active (moderate exercise/sports 3-5 days/week)<br>
            <input type="radio" name="activitylevel" value="1.725" required> Very active (hard exercise/sports 6-7 days a week)<br>
            <input type="radio" name="activitylevel" value="1.9" required> Super active (very hard exercise, physical job, or training twice a day)<br>
        </div>

        <input type="submit" value="Submit">
    </form>

    <?php
} else {
    echo "<h1>Login failed. Invalid username or password</h1>";
}
?>
</body>
</html>


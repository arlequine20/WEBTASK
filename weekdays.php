<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$day = $_POST["day"];
switch ($day) {
        case "monday":
            echo "Monday";
            break;
            case "tuesday":
            echo "Tuesday";
            break;
        case "wednesday":
            echo "Wednesday";
            break;
            case "thursday":
            echo "Thursday";
            break;
        case "friday":
            echo "Friday";
            break;
            case "saturday":
            echo "Saturday";
            break;
            case "sunday":
            echo "Sunday";
            break;
        default:
            echo "Write a week day";
    }
}
?>
<form method="post">
    Enter day: <input type="text" name="day">
    <input type="submit" value="Check">
</form>
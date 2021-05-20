<?php
function myCalculator($num01, $oper, $num02) {
$sum;
switch ($oper) {
    case "add":
        $sum = $num01 + $num02;
        break;
    case "sub":
        $sum = $num01 - $num02;
        break;
    case "mult":
        $sum = $num01 * $num02;
        break;
    case "divi":
         $sum = $num01 / $num02;
         break;
    default:
        $sum = "There was an error!";
        break;
}
return $sum;
}
/*create the superglobal with either get or post
 to get the info from the other page*/
/*for data that is not sensitive*/
$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

/* for sensitive data
$num01 = $_POST["num01"];
$oper = $_POST["oper"];
$num02 = $_POST["num02"];
*/

echo "Value: " . myCalculator($num01, $oper, $num02);
?>
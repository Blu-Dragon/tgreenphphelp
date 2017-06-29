<?php
if(isset($_POST['submit'])){
if(!empty($_POST['service'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['service']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
$service = implode(', ', $_POST['service']);
setcookie( "service", $service, time() + 360000 );
foreach($_POST['service'] as $selected) {
echo "<p>".$selected ."</p>";
}
echo "Please read and sign the contract below.";
}
else{
echo "<b>Please select at least one option.</b>";
}
}
?>


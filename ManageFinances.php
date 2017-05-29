<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">

<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>

<h1 align="center">Finance Management</h1><br><br><br><br><br>

<div class = "buttons">


<button class="submitFinance" type="button" onclick="window.location.href='ViewDatesSoldPrompt.php'"><span> View Revenue by Date Range</span>
<button class="submitFinance" type="button" onclick="window.location.href='ViewSingleDateSoldPrompt.php'"><span> View Revenue by Date </span>
<button class="submitFinance" type="button" onclick="window.location.href='ViewAllRevenue.php'"><span> View All Revenue </span>
<button class="submitFinance" type="button" onclick="window.location.href='ViewDatesBoughtPrompt.php'"><span> View Expenses by Date Range </span>
<button class="submitFinance" type="button" onclick="window.location.href='ViewSingleDateBoughtPrompt.php'"><span> View Expenses by Date</span>
<button class="submitFinance" type="button" onclick="window.location.href='ViewAllExpense.php'"><span> View All Expenses</span>
  <button class="submitFinance" type="button" onclick="window.location.href='ViewDatesProfitPrompt.php'"><span> View Profits/Losses by Date Range</span>
    <button class="submitFinance" type="button" onclick="window.location.href='ViewSingleDateProfitPrompt.php'"><span> View Profits/Losses by Date</span>



</div> <br><br><br><br>
<?php if(($_SESSION["AdminMarker"]==1)) {   ?>
<button class="submit" type="button" onclick="window.location.href='AdminHomepage.php'"> Back
<?php }  ?>

<?php if(($_SESSION["AdminMarker"]==0)) {   ?>
<button class="submit" type="button" onclick="window.location.href='Homepage.php'"> Back
<?php }  ?>
</form>



</html>
</body>

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

<h1 align="center">Inventory Management</h1><br><br><br><br><br>

<div class = "buttons">


<button class="submit1" type="button" onclick="window.location.href='AddInventoryPrompt.php'"><span> Add An Item</span>
<button class="submit1" type="button" onclick="window.location.href='ViewInventory.php'"><span> View All Inventory</span>
<button class="submit1" type="button" onclick="window.location.href='ViewInTransit.php'"><span> View In Transit</span>
<button class="submit1" type="button" onclick="window.location.href='ViewOnShelf.php'"><span> View On Shelf</span>
<button class="submit1" type="button" onclick="window.location.href='ViewSold.php'"><span> View Sold</span>


<button class="submit1" type="button" onclick="window.location.href='SearchByProductPrompt.php'"><span> Search for an item</span>
<button class="submit1" type="button" onclick="window.location.href='itemBoughtPrompt.php'"><span> Bought an item</span>
<button class="submit1" type="button" onclick="window.location.href='itemArrivedPrompt.php'"><span> Recieved an item</span>
<button class="submit1" type="button" onclick="window.location.href='itemSoldPrompt.php'"><span> Sold an item</span>
<button class="submit1" type="button" onclick="window.location.href='EditInventoryPromptPrompt.php'"><span> Edit an item</span>

<button class="submit1" type="button" onclick="window.location.href='DeleteInventoryPrompt.php'"><span> Delete An Item</span>



</div> <br><br><br><br>
<?php if(($_SESSION["AdminMarker"]==1)) {   ?>
<div><button class="submit" type="button" onclick="window.location.href='AdminHomepage.php'"> Back </div>
<?php }  ?>

<?php if(($_SESSION["AdminMarker"]==0)) {   ?>
<div><button class="submit" type="button" onclick="window.location.href='Homepage.php'"> Back </div>
<?php }  ?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the Inventory Management page.  Here you can select buttons that will allow you to interact with all of your current inventory items.
                    <br><br>
                    
                    When selected, the buttons will take you to the following parts of the application:  <br><br>
                    If <b>Add an Item</b> is selected, you will be taken to a page that will allow you to add a new item to your current list of items. <br><br>
                    If <b>View All Inventory</b> is selected, you will be shown a list of all of the current inventory items you have recorded. <br><br>
                    If <b>View in Transit</b> is selected, you will be shown all inventory items that have items currently in transit to your store. <br><br>
                    If <b>View On Shelf</b> is selected, you will be shown all inventory items that have items currently on the shelf of your store. <br><br>
                    If <b>View Sold</b> is selected, you will be shown all inventory items that have items that have been sold. <br><br>
                    If <b>Search for an item</b> is selected, you will be able to view a specific item in your inventory. <br><br>
                    If <b>Bought an item</b> is selected, you can record a purchased item in your inventory. <br><br>
                    If <b>Recieved an item</b> is selected, you will be able to record the receipt of an item. <br><br>
                    If <b>Sold an item</b> is selected, you will be able to record the sale of an item. <br><br>
                    If <b>Edit an item</b> is selected, you will be able to edit the aspects of an item in your inventory. <br><br>
                    If <b>Delete an item</b> is selected, you will be able to delete an item from your inventory. <br><br>
                    
                    
                    
                   
  
  </span>
</div>


<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
</form>



</html>
</body>

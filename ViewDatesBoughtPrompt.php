<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Date Select</h1>

<h2 align = "center"><u>Please Select a Date Range:</h2></u><br>

<form action="ViewDatesBought.php" method="post">
<div class = "inputBox">


<input type="date" name="from"  required><br><br>
<input type="date"  name="to"  required><br><br>
<button class = "inputSubmit" type = "submit"> Submit </button>



</div>

<div><button class="Submit" type="button" onclick="window.location.href='ManageFinances.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the View Expense by Date Range page.  Here you can enter two dates and view your expenses between them.
                    <br><br>
                    
                    Here you are prompted for info pertaining to the dates you would like to look expenses up for:  <br><br>
                    In the <b>Upper Date</b> text box, enter the starting date of your date range. <br><br>
                    In the <b>Lower Date</b> text box, enter the ending date of your date range.  Please ensure that this date is end date is <b>after</b> your start date. <br><br>
                    
                    
                    
                   
  
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
</body>
</html>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Date Select</h1>

<h2 align = "center"><u>Please Select a Date:</h2></u><br>

<form action="ViewSingleDateSold.php" method="post">
<div class = "inputBox">


<input type="date" name="date"  required><br><br>
<button class = "inputSubmit" type = "submit"> Submit </button>

</div>

<div><button class="Submit" type="button" onclick="window.location.href='ManageFinances.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the View Revenue by Date page.  Here you can enter a date that you would like to view your revenues on.
                    <br><br>
                    
                    Here you are prompted for info pertaining to the date you would like to look up revenue for:  <br><br>
                    In the <b>Date</b> text box, enter the date you would like to view revenues for. <br><br>
                    
                    
                    
                   
  
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

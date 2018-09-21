<?php
session_start();
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<meta charset="UTF-8">
<title>Contact Us</title>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tuttle Construction</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutUs.php">About Us</a></li>
      <li class="active"><a href="#">Contact Us</a></li>
    </ul>
  </div>
</nav>

<style>
  body  {
    background-color: D9E0E7;
	}
</style>

</head>
<body>

<script>
var firstVar="a string var";

//an object, with one of the properties being a function
var car = {color:"blue", year:42, make:"Toyota",
	makeYear: function()
  	{
	return this.make + " " + this.year;
  	}
};

//an array
var personArray = ["Jim", 34, "Tall"]
var numarray = [9, 8, 5, 11]

var sum=0;



</script>

<h1 id="demo1" name="demo1name">hello</h1>


<button type = "button"   onclick='document.getElementById("demo1").innerHTML= "A work in progress";'>change them words</button>

<button type ="button" onclick='document.getElementById("demo1").style.fontSize="35px";'> change font 1 </button>
<button type ="button" onclick='document.getElementById("demo1").style.fontSize="150px";'> change font 2 </button> <br><br>

<button type="button" onclick='document.getElementById("demo1").style.display="none";'> hide it</button>
<button type="button" onclick='document.getElementById("demo1").style.display="block";'>show it</button> <br><br>



<script>
function myFunction(a, b)
{
	document.getElementById("demo1").innerHTML=(a*b);

}
</script>

<button type="button" onclick="myFunction(3, 4)"> Using functions (pass in 3 and 4) </button>

<button type="button" onclick='document.getElementById("demo1").innerHTML=car.color;'> car color object </button>
<button type="button" onclick='document.getElementById("demo1").innerHTML=car.year;'>car year object </button>

<button type="button" onclick='document.getElementById("demo1").innerHTML=car.makeYear();'>function object </button><br><br>

<button type="button" onclick='document.getElementById("demo1").innerHTML=Date();'>Show Date Event </button>

<button type="button" onclick='document.getElementById("demo1").innerHTML=personArray[0];'>Array </button><br><br>

<script>

for(var i=0; i<numarray.length; i++)
{
	sum+=numarray[i];
}
	document.write(sum);
	
function backFunction()
{
	window.history.back();
}	

function alertFunction()
{
	alert("this is an alert popup");
}

function promptFunction()
{
	var name = prompt("What is your name", "Jim");
	
	if(name!=null)
	{
	var txt = "Your name is " + name + ". ";
	document.getElementById("demo1").innerHTML=txt;	
	} else document.getElementById("demo1").innerHTML="You hit cancel....";
	
	
}

function submitFunction()
{
	var input=document.getElementById("textBox").value;
	if(input==null || input=="")
	{
	document.getElementById("demo1").innerHTML="You didn't enter anything...";	
	} else
	{
	document.getElementById("demo1").innerHTML="You entered " + input + ". ";
	}
}

function valueFunction()
{
	var input=document.getElementById("textBox1").value;
	
	if(input<10 && input>0)
	{
		document.getElementById("demo1").innerHTML="Your number is " + input;
	
	} else 	
	{
	document.getElementById("demo1").innerHTML="Number is not less than 10 and greater than 1, enter another.";
	}
}

function nameFunction()
{
	var fname=document.getElementById("fname").value;
	var lname=document.getElementById("lname").value;
	if(fname==""|| lname=="")
	{
	document.getElementById("demo1").innerHTML="You didn't enter anything...";	
	} else
	{
	document.getElementById("demo1").innerHTML="Hello there " + fname + " " + lname + ". ";
	}
}
</script>

<button type="button" onclick="backFunction()">Back</button>
<button type="button" onclick="alertFunction()">Alert Popup</button>
<button type="button" onclick="promptFunction()">Name prompt</button><br><br>

<input type="text" name="textName" id="textBox">
<button type="button" onclick="submitFunction()">Submit name function</button><br><br>

<input type="text" name="textName1" id="textBox1">
<button type="button" onclick="valueFunction()">Submit number function</button><br><br>

<input type="text" name="fname" id="fname">
<input type="text" name="lname" id="lname">
<button type="button" onclick="nameFunction()">submit name function</button><br><br>

<button type="button" id="eventButton">2 prompts</button> <br><br>

<h3 id="event1">Event here</h3>
<button type="button" id="multiButton">multi button</button>


<script>
var x = document.getElementById("eventButton");

x.addEventListener("click", promptFunction1);
x.addEventListener("click", promptFunction2);

function promptFunction1()
{
	alert("This is the first prompt");
}
function promptFunction2()
{
	alert("...and the second");
}


var x = document.getElementById("multiButton");
x.addEventListener("mouseover", mouseFunction1);
x.addEventListener("mouseout", mouseFunction2);
x.addEventListener("click", clickFunction1);

function mouseFunction1()
{
	document.getElementById("event1").innerHTML="You moused over";
}

function mouseFunction2()
{
	document.getElementById("event1").innerHTML="You moused away";
}

function clickFunction1()
{
	document.getElementById("event1").innerHTML="You clicked it";
}




</script>


<script>

function myFunction22()
{
	var butt = "hello";
	alert(butt);
}
</script>

<button type = "button" onclick="myFunction22()">alert2</button>




<script>

var person = {age1:  4222, name1:  "Timothy", desciption:  "gross",

 personFunction: function(){
 
 return this.age1;
			}

};



function student(fname, age, grade)		//constructor
{
	this.firstname=fname;
	this.studentAge=age;
	this.studentGrade=grade;
	this.nameAndGrade = function()		//function as an argument within a constructor		
	{
		return "The students name is " +  this.firstname + " who has a grade of " + this.studentGrade;
	}

}

var theStudent = new student("Todd", 12, "A+");
var theOtherStudent = new student("Andre", 44, "D-");

</script>

<button type = "button" onclick='document.getElementById("demo1").innerHTML=person.personFunction();'>objname or we</button>

<button type = "button" onclick ='document.getElementById("demo1").innerHTML= "The students name is " + theStudent.firstname + " who is " + theStudent.studentAge;'>constructor thing</button>
<button type = "button" onclick ='document.getElementById("demo1").innerHTML= theOtherStudent.nameAndGrade();'>constructor with function</button>

<script> 

var house = {style: "colonial", size: "55", 
	houseFunction: function(){
	return "House style: " + this.style + " and " + this.size;
	}
 }
 
 function house1(color, roof)
{
	this.houseColor = color;
	this.houseRoof = roof;
	this.houseAndRoof = function()
	{
		return this.houseColor + " and " + this.houseRoof;			//A function that is a property of a function is called a method
	}

}

var theHouse = new house1("green", "red");
var theHouse1 = new house1("blue", "grey");


function theFunction34()
{
var num34 = prompt("enter number more than or less than 34", "0");

var message = (num34>10) ? "its greater than 10" : 
(num34<10) ? "less than 10" : 
(num34==10) ? " its 10" : 
 	     "i have no idea";
 	     
 	     return message;
}


var arrowFunctions = (a, b) => (a * b);				//Quicker way to make a function called an Arrow Function	

var sayHi = () => alert("Hello  there");			//Arrow Function with no arguments



var num52 = 10;
var welcome = (num52 > 5) ?
  () => alert("Greater than 5") :
  () => alert("less than 5!");

				
					
function stringLength()
{
	var stringInput = prompt("Enter a string to test for length.", " ");
	
	document.getElementById("demo1").innerHTML = "The length of " + stringInput + " is " + stringInput.length ;
}

function stringPosition()
{
	var string = "Dallas";
	var stringPosition = prompt("Enter position for string: Dallas", 0);
	
	(stringPosition <string.length) ? document.getElementById("demo1").innerHTML = "The character at that position is " + string[stringPosition] :
					document.getElementById("demo1").innerHTML = "The string isn't that big pal.";
}


function pushAndPop()
{
	var fruitArray = ["Orange", "Banana", "Apple"];
	alert("Original: " + fruitArray);
	fruitArray.pop();
	alert("After pop: " + fruitArray);
	fruitArray.push("Passion Fruit");
	alert("After push: " + fruitArray);

}

function shiftAndUnshift()
{
	var fruitArray1 = ["Orange", "Banana", "Apple"];
	alert("Original: " + fruitArray1);
	fruitArray1.shift();
	alert("After shift: " + fruitArray1);
	fruitArray1.unshift("Passion Fruit");
	alert("After unshift: " + fruitArray1);
}

function arrayLoop()
{	
	var numArray = [3, 2, 44, 5, 22];
	
	for (var key in numArray)
	{
		alert(numArray[key]);
	}
	
}

function dateFunction()
{
	var now = new Date();
	
	alert(now);
}

function jsonThing()
{
	var room = {length: 55, width: 30, size: "big"};
	
	var stringify = JSON.stringify(room);
	
	alert( "The room object as a string: " + stringify );
	
	stringify =JSON.parse(stringify);
	
	alert("...and back to an object: " + stringify);
}




var user = { Name:  "dallas", 					//getter and setter
	get fullName() { return this.Name },
	set fullName(value){ this.Name = value}	
	
		}
		
		
function errorThing()
{
try	{
	asdf;
	} catch(err)
	{
		alert(err.name);
		alert(err.message);
		alert(err.stack);

	}
}






</script>

<button type = "button" onclick='document.getElementById("demo1").innerHTML=house.houseFunction();'>house object</button>

<button type = "button" onclick='document.getElementById("demo1").innerHTML=theHouse.houseColor+ " and " + theHouse1.houseRoof;'>house1 object</button>
<button type = "button" onclick='document.getElementById("demo1").innerHTML= theHouse1.houseAndRoof();'>house1 constructor</button>

<button type = "button" onclick='document.getElementById("demo1").innerHTML= theFunction34();'>ternary thing</button><br><br>

<button type = "button" onclick='document.getElementById("demo1").innerHTML= arrowFunctions(4,5);'>Arrow Functions</button>

<button type = "button" onclick=sayHi();>arrow function no argument</button>

<button type = "button" onclick=welcome();>if Arrow Function</button>

<button type = "button" onclick=stringLength();>String Length</button>

<button type = "button" onclick=stringPosition();>String Position</button><br><br>

<button type = "button" onclick=pushAndPop();>Push and Pop</button>

<button type = "button" onclick=shiftAndUnshift();>Shift and Unshift</button>

<button type = "button" onclick=arrayLoop();>Array Loop via Key</button>

<button type = "button" onclick=dateFunction();>Date Stuff</button>

<button type = "button" onclick=jsonThing();>JSON Stringify</button>

<button type = "button" onclick='document.getElementById("demo1").innerHTML= user.fullName;'>Get</button>
<button type = "button" onclick='document.getElementById("demo1").innerHTML= user.fullName = "Alfred";'>Set</button><br><br>

<button type = "button" onclick=errorThing();>Try/Catch</button>



<button type = "button" id = "elem"> Multiple events</button>

<button type = "button" onclick = addArray();> Add Array </button>


<script>

function handler1()
{
	alert("The first alert");
}

function handler2()
{
	alert("The second alert");
}
function handler3()
{
	document.getElementById("demo1").innerHTML="The third alert";
}

elem.addEventListener("click", handler1);		//lets you add multiple events to the same element
elem.addEventListener("click", handler2);
elem.addEventListener("click", handler3);


function addArray()
{
	var numArray5 = [32, 5, 8, 12];
	var sum5 = 0;
	
	for( x in numArray5)
	{
		sum5+=numArray5[x];
	}
	
	document.getElementById("demo1").innerHTML = "The sum is " + sum5;
}



</script>






</html>
</body>

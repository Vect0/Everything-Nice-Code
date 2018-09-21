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

function person(age, height, name)
{
	this.personAge = age;
	this.personHeight = height;
	this.personName = name;
	this.personAgeAndHeight = function()
	{
		return "The age is " + this.personAge + " and the height is " + this.personHeight + " and the Name is " + this.personName;
	}
}	

person.prototype.origin = "Ireland";		//Use prototype to add a new property to person named origin

person.prototype.justTheAge = function() {
					return "Using a prototype to add a new method, also age is: " + this.personAge;
					}

var person1 = new person(32, 5, "Jim");

var person2 = new person(55, 8, "Ralph");


</script>

<h1 id="demo1">Hello</h1><br><br>


<button type="button" onclick='document.getElementById("demo1").innerHTML = person1.origin';> Constructor Object</button>

<button type="button" onclick='document.getElementById("demo1").innerHTML = person1.justTheAge()';> Constructor Object</button>

<button type="button" onclick='document.getElementById("demo1").innerHTML = person1.personAgeAndHeight()';>Object 2</button>

<script>

function car (color, make, model)
{
	this.carColor = color;
	this.carMake = make;
	this.carModel = model;
	this.carAll = function()
	{
		return "The car's color is " + this.carColor + ", the make is " + this.carMake + " and the model is " + this.carModel + ". ";
	}
}	


var car1 = new car("blue", "Toyota", 77);


var apartment = {color: "grey", size: "Real Big", 
		objFunction1 : function()
		{
			return "The color of the apartment is " + this.color + " and the size is " + this.size;
		}
}


function promptFunction()
{
	var name = prompt("What is your name?", "Paul");
	
	if (name != null)
	{
		var txt = "Your name is " + name + ". ";
		document.getElementById("demo1").innerHTML = txt;
	
	} else document.getElementById("demo1").innerHTML = "You hit cancel";
}

function boxFunction()
{
	var boxValue= document.getElementById("textBox").value;
	
	if (boxValue ==null || boxValue=="")
	{
		document.getElementById("demo1").innerHTML = "Please enter a value";
	
	} else 
	{
		document.getElementById("demo1").innerHTML = "The value is " + boxValue + ". ";
	}
}

function numBoxFunction()
{
	var numValue= document.getElementById("textBox2").value;
	
	if (numValue > 10|| numValue < 0)
	{
		document.getElementById("demo1").innerHTML = "Na bub";
	
	} else if (numValue ==null || numValue == "")
	{
		document.getElementById("demo1").innerHTML = "You didnt enter anything";
	}
	  else 	
	{
		document.getElementById("demo1").innerHTML = "The value of " + numValue + " is within the range.";
	}
}

function nameFunction()
{
	var fName= document.getElementById("fName").value;
	var lName= document.getElementById("lName").value;
	
	if (fName == "" || lName == "")
	{
		document.getElementById("demo1").innerHTML = "You didnt enter anything....";
	} else
	{
		document.getElementById("demo1").innerHTML = "Your name is " + fName + " " + lName + ". ";
	}
}


var truck = {color: "Yellow", year: 87};
var car = {color: "Greyish", year: 09};

function sedanFunction()
{
	return "The car is a sedan, the color is blue, and the year is 99";
}

var carArray = [truck, car, sedanFunction()];

var arrowFunction = (a, b) => a + " times " + b + " is " + (a*b);


class User{					//using a class or whatever

	constructor (name)
	{
		this.name = name;
	}

	sayHi()
	{
		alert(this.name);
	}

}

var user = new User("Julio");


var student2 = {name: "Fred", 
		get fullName () { return this.name},
		set fullName (value) {this.name = value}
		}



var person3 = {name: "Rafael", height: 5.2, 
		 nameAndHeight: function() {
						return "Name is " + this.name + " and height is " + this.height;
					} 
				}
		
var genericObject = {val1: 55, 	
				
passFunction: function()
{
	var name = prompt("name pls", "");
	
	if (name != "" && name != null)
	{
	alert("Hello there " + name);
	} else document.getElementById("demo1").innerHTML = "You didn't enter anything";
}
}	


				
				

</script>

<button type="button" onclick='document.getElementById("demo1").innerHTML = car1.carAll();'>car object</button>

<button type="button" onclick='document.getElementById("demo1").innerHTML = apartment.objFunction1();'>apartment object function</button>

<button type="button" onclick= promptFunction();>Prompt Function</button><br><br>

<input type="text" name="textName" id="textBox">
<button type="button" onclick=boxFunction();>Text Box</button>

<input type="text" name="textName" id="textBox2">
<button type="button" onclick=numBoxFunction();>Enter a num between 1-10</button>

<input type="text" name="textName" id="fName">
<input type="text" name="textName" id="lName">
<button type="button" onclick=nameFunction();>First and Last Name</button><br><br>

<button type="button" onclick='document.getElementById("demo1").innerHTML = carArray[0].color;'>Object within an array</button>

<button type="button" onclick='document.getElementById("demo1").innerHTML = carArray[2];'>Function within an array</button>

<button type="button" onclick='document.getElementById("demo1").innerHTML = arrowFunction(3, 5) ;'>Function within an array</button>

<button type="button" onclick='document.getElementById("demo1").innerHTML = user.sayHi(); '>Class thing</button><br><br>

<button type="button" onclick='document.getElementById("demo1").innerHTML = student2.fullName;'>Get</button><br><br>

<button type="button" onclick='document.getElementById("demo1").innerHTML = student2.fullName = "Isaac";'>Set</button><br><br>

<button type="button" onclick='document.getElementById("demo1").innerHTML = person3.nameAndHeight();'>whatevs</button>

<button type="button" onclick= genericObject.passFunction();>Alert method</button>


<script>

function dinosaur (color, height)
{
	this.dColor = color;
	this.dHeight = height;
	this.heightAndColor = function() {	
						return "The height is " + this.dHeight+ " and the color is " + this.dColor;
					}
}


var stegosaurus = new dinosaur("blue", 88);
var raptor = new dinosaur("grey", 11);





</script>

<button type="button" onclick='document.getElementById("demo1").innerHTML = stegosaurus.heightAndColor();'>dinosaur object</button>
<button type="button" onclick='document.getElementById("demo1").innerHTML = raptor.heightAndColor();'>dinosaur object</button><br><br>

<button type="button" id="eventButton">2 events </button>





<script>

function event1(){
	document.getElementById("demo1").innerHTML = "The first event....";
}

function event2(){
	alert("...and the second!");
	}

var x = document.getElementById("eventButton");

x.addEventListener("click", event1);
x.addEventListener("click", event2);
 
 
 
var inputNumObject = { right: "That number is within 0-10", wrong: "That number is not within range", 
			inputNumFunction: function(value){
						if (value <10 && value >0)
						{
							return this.right;
						} else						
						{
							return this.wrong;
						}
			}
		}	

var inputNumBoxObject = {right: "Your name is ", wrong: "You didn't enter anything.", 
				inputNumBoxFunction: function() 
				{
					var nameValue1 = document.getElementById("textBox3").value
					
					if (nameValue1 == "" || nameValue1 == null)
					{
						return this.wrong;
					} else return this.right + " " + nameValue1;
				}
			}
			
			
class Student{

	constructor(name, grade)
	{
		this.name = name;
		this.grade = grade;
	}
	
	sayStudent()
	{
		return  "The students name is " + this.name + " and their grade is " + this.grade;
	}

}

var student1 = new Student("Leo", "D-");

var student2 = new Student("Clarice", "A+");


var methodObj = {color: "blue", age: 55, 
		methodObjFunction: function()
		{
			return document.getElementById("demo1").innerHTML = "yo";
		}
	}
	
	
function robot(type, variant)
{
	this.robotType = type;
	this.robotVariant = variant;
	this.typeAndVariant= function()
	{
		return this.robotType + " and " + this.robotVariant;
	}
}

var robot1 = new robot("Mark 1", "Type 2");


class Animal{
	
	
	
	run (speed)
	{
		this.speed = speed;
		alert( "Speed is " + this.speed);
		
	}
	
	constructor (name)
	{
		this.name = name;
	}
}

class Rabbit extends Animal
	{
	
		hide()
		{
			alert(this.name + " is hidden now!");
		}	

	}
	
var rabbit1 = new Rabbit("Peter");
	
	



 
 </script>

<button type="button" onclick='document.getElementById("demo1").innerHTML = inputNumObject.inputNumFunction(3);'>inputNum Object</button><br><br>

<input type="text" name="textName" id="textBox3">
<button type="button" onclick= 'document.getElementById("demo1").innerHTML = inputNumBoxObject.inputNumBoxFunction();'>Enter name</button>

<button type="button" onclick= 'document.getElementById("demo1").innerHTML = student1.sayStudent();'>Student 1</button>

<button type="button" onclick= 'document.getElementById("demo1").innerHTML = student2.sayStudent();'>Student 2</button>

<button type="button" onclick= 'document.getElementById("demo1").innerHTML = methodObj.methodObjFunction();'>yo</button>

<button type="button" onclick= 'document.getElementById("demo1").innerHTML = robot1.typeAndVariant();'>robot</button>

<button type="button" onclick= rabbit1.run(56);>wabbit run</button>

<button type="button" onclick= rabbit1.hide();>wabbit hide</button><br><br>

<script>

function passFunction1(age)
{
	return "I am " + age;
}


</script>

<button type="button" onclick= 'document.getElementById("demo1").innerHTML = passFunction1(14);'>robot</button>


</body>
</html>	

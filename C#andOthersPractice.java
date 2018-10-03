
Previous interview questions:

Sum Integers in an array, reverse a string, print 1-100 and output fizz instead if num is multiple of 3 and buzz if num is multiple of
5 and fizzbuzz if num is multiple of 3 and 5.  Just write headers for a table with inventory and manufacturer and stuff.
	
Tapestry one: Draw a DFD, Documents(docID, docDate), keywords(KeyID, Keyword), sales(SaleID, saleDate) 
Join tables and fine anything with the keyword blue, blue and yellow.  
Make an HTML form with input field, submit
button, make a css file and color the header green.  I did a php file that accepted that email variable as a post variable.
(forgot the header and body)
	
sum integers in array:

using System;
namespace space1{
	
	class class1{
		
		public static void Main(string[] args)
		{
			int sum;
			int[] numArray = new int[5];
			
			for (int i =0; i<numArray.length; i++)
			{
				Console.WriteLine("Enter value for position " + i);
				numArray[i] = Convert.ToInt32(Console.ReadLine));
				sum += numArray[i];
			}
			
			Console.WriteLine("Sum of array is " + sum);
		}
	}
}

print 1-100 fizz/buzzz:

using System;
namespace space1{
	class class1{
		public static void Main(string[] args)
		{
			for (int i=0; i<101; i++)
			{
				if (i % 3 == 0 && i % 5 != 0)
				{
					Console.WriteLine("number is " + i + ", fizz");	
				} else if (i % 5 == 0 && i % 3 != 0)
				{
					Console.WriteLine("number is " + i + ", buzz");
				} else if (i % 3 == 0 && i % 3 ==0) 
				{
					Console.WriteLine("number is " + i + ", fizzbuzz");	
				}
			}
		}
	}
}






-------------

C# Practice:


read Var:

using System;
namespace HelloWorldApplication {
   
   class class1{
       
        static void Main (string[] args)
       {
           int num1;
           
           Console.WriteLine("Enter num");
           num1 = Convert.ToInt32(Console.Read());
           
           Console.WriteLine("num is " + num1);
           
       }
   }
   }

----------------

if if else:

using System;

namespace DecisionMaking {

   class Program {
   
      static void Main(string[] args) {
         
         int x;
         
         Console.WriteLine("Enter num");
         x = Convert.ToInt32(Console.ReadLine());
         
         
         if (x < 44)
         {
             Console.WriteLine(x + " is less than 44");
             
             if (x < 10)
             {
                 Console.WriteLine(" and " + x + " is less than 10");
                 
             }
         } else if ( x > 46)
         {
             Console.WriteLine(x + " is greater than 46");
             if (x > 90)
             {
                 Console.WriteLine(x + " is greater than 90");
             }
         }
         else if (x == 45)
         {
             Console.WriteLine(x + " is 45");
         }
   }
}

------------------
   for loop with if statement:
      
      
   using System;
   
   namespace forIf;
   
   class class1{
      public static void Main (String[] args)
      {
         int x;
         
         Console.WriteLine("Enter num");
         x = Convert.ToInt32(Console.ReadLine());
         
         for (int i=0; i< x; i++)
         {
              Console.WriteLine( i + " ");
         }
      }
      
   }
   
 -------------------
   
   method thing:
   
   using System;

   namespace methodThing{
    
    class class1{
        
        public int age;
        public string name;
        
        public void getAgeName()
        {
            Console.WriteLine(name + " is " + age);
            
        }
    }
    
    class class2{
        
        public static void Main(string[] args)
        {
            class1 obj = new class1();
            
            obj.age = 55;
            obj.name = "jim";
            
            obj.getAgeName();
            
        }
    }  
}
   
   --------------------
	   
using System;
	
namespace space1{
	
	class class1{
		
		public static void Main(string[] args)
		{
			int[] numArray = new int[5];
			
			for (int i=0; i<numArray.length; i++)
			{
				Console.WriteLine("Enter value for position" + i)
				numArray[i] = Convert.ToInt32(Console.ReadLine());
				Console.WriteLine("value at position " + i + " is " + numArray[i]);
			}
		}
	}
	
}
	   
-----------------------------
Name/Grade class methods:
	
	
using System;
	
	class class1{
		
		public name;
		public grade;
		
		returnGrade()
		{
			Console.WriteLine("Name is " + name + " with a grade of " + grade);	
		}
		
	class class2{
		public static void Main(string[] args)
		{
			class1 obj = new class1();
			
			Console.WriteLine("Enter value for name: ");
			obj1.name = Console.ReadLine();
			Console.WriteLine("Enter value for age: ");
			obj1.age = Convert.ToInt32(Console.ReadLine());
			
			obj.returnGrade();
		}
		
	}
	}
	
-----------------------------
Java Practice:
	
pass array to other class method:
	
import java.util.Scanner;


public class class1
{
    
    public static void main(String[] args)
    {
        
        int[] arr = new int[3];
        
        Scanner sc = new Scanner(System.in);
        
        for (int i=0; i<arr.length; i++)
        {
            
            System.out.println("Enter value for position " + i);
            
            arr[i] = i*2;
        }
        
        class2 obj = new class2();
        obj.returnArr(arr);
    }
}

 class class2
{
    
    public void returnArr(int[] array)
    {
        for (int i=0; i<array.length; i++)
        {
            System.out.println("Value at position " + i + " is " + array[i]);
        }
    }
}

basically the same:
	
public class class1
{
    
    public static void main(String[] args)
    {
        int[] arr = new int[3];
        int num1 =4;
        int num2 =23;
        int num3 =44;
        
        class2 obj = new class2();
        obj.returnArr(arr, num1, num2, num3);
    }
}

class class2
{
    
    public void returnArr(int[] arr, int num1, int num2, int num3)
    {
        
        arr[0] = num1;
        arr[1] = num2;
        arr[2] = num3;
        
        for (int i=0; i<arr.length; i++)
        {
            System.out.println("Value for position " + i + " is " + arr[i]);
        }
    }
}
	
-----------------------------
     
HTML Practice:
   
 Basic HTML form with POST variables:
	
   <!DOCTYPE html>
<html>
<head>
<title><h1>This is title</h1></title>
</head>

<body>

<form action = "actionFile.php" method = "POST">			
	<p> Form: </p>
	<input type="text" name="box1" placeholder="Enter Name" required>		//$box1Value = $_POST['box1'];  in other file
    <button type="submit">Submit</button>

</form>

<h1>list:</h1>

<ul>
	<li><a href="google.com">google</a>
    <li><a href="google.com">google2</a>
</ul>

<p>Table: </p>

<table>
	<tr>
    	<th> Name</th>
        <th> Age</th>
    </tr>
    <tr>
    	<td>Jim</td>
        <td>44</td>
    </tr>
</table>



<h2>Image: </h2>
<img src="img_girl.jpg">

</body>
</html>
--------------------------------
                            
C++ Practice:
	Input Array:
	
	#include <iostream>
using namespace std;
 

 
void arrayThing()
 {
     int numArray[5];
    
    for (int i=0; i<5; i++)
    {
        cout << "Enter value for position " << i << endl;
        cin >> numArray[i];
    }
 }
 

int main()
{
    arrayThing();
    
}
--------------------------------------
      
Class and Object:
	
	#include <iostream>

using namespace std;

class class1{
    
    public: 
        string name;
        int age;
    
};


int main()
{
    class1 obj;
    
    obj.name = "jim";
    obj.age = 55;
    
    cout << "Object's name is " << obj.name << " and age is " << obj.age; 
}
   
----------------------------------------
JS Practice:
	
class object:
	
class class1{

constructor(name){
	this.name = name;
}

hi(){
		return this.name;
    }
}

var obj = class1("jim");
	
obj.hi();
	
-----------------------------------------
	
var obj = { name: "Jim", 
	   age: 44, 
	   both: function(value) { 
			return this.name + " and " + this.age + " and " + value;
	   }

obj.both(33);
	   
------------------------------------

  Example invalid search Error popup from ICAOWorkload:
	
	
var ICAOValue = json.ICAO;				//gets the ICAO value the user entered into the search field
	
if (ICAOValue === undefined)				//launches the error message if the user doesn't enter anything for ICAO
{
	Ext.Msg.alert("Please enter a value for ICAO");	
}
	
--------------------------------------
	
Renderer for Italicizing row value if date is in the past:
	
var today = new Date();				//gets the current date
	
var rowDate = record.get('ROW_DATE');		//gets the mission's date for a row
	
if (today > rowDate) 				// if the row is in the past, bold the value for that row.
{
	return "<b>" + value + "</b>"
} else 
{
	return value;	
}

-----------------------------------------------
perl practice:
	   
$name = "Jim";

@array = (3, 44, "joe", 55);
$arraySize = @array;

for ($i=0; $i<$arraySize; $i++)     #print values of an array
{
    print "$array[$i] \n";
}


sub printName{
    
    print "$name \n";               #print name
}

printName();


sub printInput{                     #print input values of an array
    
    for ($i=0; $i<5; $i++)
    {
        print "Input value at position $i is $_[$i] \n";
    }
}

printInput(33, "joe", "paul", 2, "ralph");

   
   
   
   
   
   
   
   
   
   
   
   
   


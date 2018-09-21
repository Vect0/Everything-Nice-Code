C# Practice:

-------------

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
     
HTML Practice:
   
   
   <!DOCTYPE html>
<html>
<head>
<title><h1>This is title</h1></title>
</head>

<body>

<form>
	<p> Form: </p>
	<input type="text" name="box1" placeholder="Enter Name" required>
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
	
	
------------------------------------

  Example invalid search Error popup from ICAOWorkload:
	
var ICAOStore = Ext.getStore('ICAOWorkloadStore');  			//gets the store, assigns it to a value
	
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
	

   
   
   
   
   
   
   
   
   
   
   
   
   


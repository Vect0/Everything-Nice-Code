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


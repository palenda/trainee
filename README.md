# trainee
11 tasks

Task 1.

Write a PHP functions to test whether a number is greater than 30, 20 or 10 using a if conditions, switch and ternary operator.

Input args: (int $inputNumber).

Output args: Function must be return one value from list: 
More than 30
More than 20
More than 10
Equal or less than 10

What would success look like?3 functions that perform the same action, but in 3 different ways (if, switch, ternary operator).



Task 2.

Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday. Your script should determine the number of days based on the current date.

Func args: (string $date).

Acceptable date format is ’DD-MM-YYYY’.

What would success look like?
A function that returns how many days are left until the entered birthday.




Task 3.

Write a PHP function to add the digits by absolute of an integer repeatedly until the result has a single digit. 

For example
Input: 5689
Output: 1
Explanation: 5689 = 5+6+8+9 = 28 = 2+8 = 10 = 1+0 = 1

What would success look like?
A function that works with numbers, returning an array of solved values.



Task 4.

Given a list of values. Delete the element from the list in the 'n' position. After deleting the element, integer keys must be normalized. Use function array_values() is forbidden.

Func args: (array $arr, int $position)

For example
Input: 
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
$position = 3;
Output:
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

What would success look like?
A function that removes an element from an array by a key and restores the order of elements in that array.


Task 5.

Given two integers A and B. Write a function that outputs all numbers from A to B inclusive, in ascending order if A < B, or in descending order otherwise. Use recursion.

Func args: (integer A, integer B).

For example
Input: 4, 9
Output: 4, 5, 6, 7, 8, 9

Input: 9, 4
Output: 9, 8, 7, 6, 5, 4

What would success look like?
A function that outputs all digits from A to B in the order given by the condition



Task 6.

Given a string where words are separated by any of the '_', '-', ' ' characters. Write a function that converts such strings to single studly caps case words and removes extra spaces on both sides.

For example
Input:       ‘               The quick-brown_fox jumps over the_lazy-dog       ’
Output:    ‘TheQuickBrownFoxJumpsOverTheLazyDog’

Func args:  (string $input)

What would success look like?
A function that returns a string where all the individual words begin with a capital letter.


Task 7.

Given a string with a url address. Write a function to check if this string is a valid url address using regular expressions.

For example
Input:       htps://innowise,com/
Output:    Not a valid URL

Input:       https://innowise.com/
Output:    OK

Func args:  (string $input)

What would success look like?
A function that checks if the url is correct.


Task 8.

Create a class "Matrix". The class must have the following variables:

a two-dimensional array of real numbers;
the number of rows and columns in the matrix.

The class must have the following methods:

addition with another matrix;
multiplication by a number;
print output;
matrix multiplication. *

What would success look like?
A class that implements the necessary methods.


Task 9.

Create an example of inheritance, implement the Student class and the Aspirant class, a graduate student differs from a student in having some kind of research work.

The Student class contains variables: 
String firstName, lastName, group. 
Double averageMark.

Create a variable of type Student that refers to an object of type Aspirant.

Create a getScholarship() method for the Student class that returns the scholarship amount. 

If the average grade of the student is 5, then the amount is 100 USD, otherwise 80 USD. Override this method in the Aspirant class. If the average grade of a graduate student is 5, then the amount is 200 USD, otherwise 180 USD.

Create an array of Student type that contains objects of Student and Aspirant class. Call getScholarship() method for each element of the array.

What would success look like?
Implemented classes with defined methods, inheritance.



Task 10. 

Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.

You need to implement 8 methods: add(), multiply(), divide(), subtract(), addBy(), divideBy(), multiplyBy(), subtractBy().

Provide an opportunity to make calculations by chain.

For example:
$mycalc = new MyCalculator(12, 6);
echo $mycalc->add(); // Displays 18
echo $mycalc->multiply(); // Displays 72
// Calculation by chain
echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )

What would success look like?
A class that executes the necessary methods.


Task 11.

Write a program to find the path. Create a 10x10 array of coordinates, any multidimensional array of the form $array[y][x] = status, where status is the availability of the cell (if 1 - then there is an obstacle and it must be bypassed, 0 - you can pass). You need to make a path to get from point A to point B bypassing obstacles. Use classes, serialization to store data. The result of the previous search attempts can be retrieved from the save file.

The points A and B are arbitrary: 
A ($a = array("x"=>2, "y"=>3);)
B ($b = array("x"=>9, "y"=>1);)

You need to generate a field (10x10 or other), output with the field and with the search result to a file.

What would success look like?
A program that generates a 10x10 field and finds the shortest path from point A to point B.

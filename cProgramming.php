<?php
	$page_title = "Learn with Saurabh";
	include_once('includes/header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>C Programming!</title>
</head>
<body>
	<h1>C Programming</h1>
	<h4>C is a procedural programming language. It was initially developed by Dennis Ritchie as a system programming language to write operating system. The main features of C language include low-level access to memory, simple set of keywords, and clean style, these features make C language suitable for system programming like operating system or compiler development.</h4><br><br>

	<h1>C Language Introduction</h1>

<h4>C is a procedural programming language. It was initially developed by Dennis Ritchie in the year 1972.<br> It was mainly developed as a system programming language to write an operating system.<br> The main features of the C language include low-level memory access, a simple set of keywords, and a clean style, these features make C language suitable for system programmings like an operating system or compiler development. <br><br>
Many later languages have borrowed syntax/features directly or indirectly from the C language.<br> Like syntax of Java, PHP, JavaScript, and many other languages are mainly based on the C language.<br> C++ is nearly a superset of C language (Few programs may compile in C, but not in C++). <br>
<h2>Beginning with C programming: </h2>
 

Structure of a C program <br>
After the above discussion, we can formally assess the structure of a C program. By structure, it is meant that any program can be written in this structure only.<br> Writing a C program in any other structure will hence lead to a Compilation Error.<br>
The structure of a C program is as follows:<br>
 


The components of the above structure are:<br> 
Header Files Inclusion: The first and foremost component is the inclusion of the Header files in a C program. <br>
A header file is a file with extension .h which contains C function declarations and macro definitions to be shared between several source files.<br>
Some of C Header files: <br>
stddef.h – Defines several useful types and macros.<br>
stdint.h – Defines exact width integer types.<br>
stdio.h – Defines core input and output functions<br>
stdlib.h – Defines numeric conversion functions, pseudo-random network generator, memory allocation<br>
string.h – Defines string handling functions<br>
math.h – Defines common mathematical functions<br>
Main Method Declaration: The next part of a C program is to declare the main() function.<br> The syntax to declare the main function is:<br>
Syntax to Declare the main method: <br>
 
int main()
{}
 
Variable Declaration: The next part of any C program is the variable declaration. <br>It refers to the variables that are to be used in the function.<br> Please note that in the C program, no variable can be used without being declared.<br> Also in a C program, the variables are to be declared before any operation in the function.<br>
Example: <br>
 
int main()
{
    int a;
.
.
 <br>
Body: The body of a function in the C program, refers to the operations that are performed in the functions. It can be anything like manipulations, searching, sorting, printing, etc.<br>
Example: <br>
 
int main()
{
    int a;

    printf("%d", a);
.
.<br>
 
Return Statement: The last part of any C program is the return statement.<br> The return statement refers to the returning of the values from a function. <br>This return statement and return value depend upon the return type of the function. <br.>For example, if the return type is void, then there will be no return statement. In any other case, there will be a return statement and the return value will be of the type of the specified return type.<br>
Example: <br>
 
int main()
{
    int a;

    printf("%d", a);

    return 0;
}<br><br>
 
<h2>Writing first program: </h2>
Following is first program in c<br>
 

<h5>#include <stdio.h>
int main(void)
{
    printf("GeeksQuiz");
    return 0;
}</h5><br><br>
Let us analyze the program line by line. <br>
Line 1: [ #include <stdio.h> ] In a C program, all lines that start with # are processed by a preprocessor which is a program invoked by the compiler.<br> In a very basic term, the preprocessor takes a C program and produces another C program. <br>The produced program has no lines starting with #, all such lines are processed by the preprocessor.<br> In the above example, the preprocessor copies the preprocessed code of stdio.h to our file.<br> The .h files are called header files in C. These header files generally contain declarations of functions. We need stdio.h for the function printf() used in the program. <br>
Line 2 [ int main(void) ] There must be a starting point from where execution of compiled C program begins.<br> In C, the execution typically begins with the first line of main().<br> The void written in brackets indicates that the main doesn’t take any parameter (See this for more details)<br>. main() can be written to take parameters also. We will be covering that in future posts.<br> 
The int was written before main indicates return type of main(). <br>The value returned by main indicates the status of program termination. See this post for more details on the return type.<br>
Line 3 and 6: [ { and } ] In C language, a pair of curly brackets define scope and are mainly used in functions and control statements like if, else, loops. All functions must start and end with curly brackets. <br>
Line 4 [ printf(“GeeksQuiz”); ] printf() is a standard library function to print something on standard output. The semicolon at the end of printf indicates line termination. <br>In C, a semicolon is always used to indicate end of a statement.<br> 
Line 5 [ return 0; ] The return statement returns the value from main().<br> The returned value may be used by an operating system to know the termination status of your program.<br> The value 0 typically means successful termination. <br>
 
<h3>How to execute the above program: </h3><br>
In order to execute the above program, we need to have a compiler to compile and run our programs.<br> There are certain online compilers like https://ide.geeksforgeeks.org/, http://ideone.com/, or http://codepad.org/ that can be used to start C without installing a compiler.<br> 
Windows: There are many compilers available freely for the compilation of C programs like Code Blocks and Dev-CPP.   We strongly recommend Code Blocks.<br>
Linux: For Linux, gcc comes bundled with Linux,  Code Blocks can also be used with Linux. <br><br>

 
</h4>
</body>
</html>
<?php
include_once("subjects.php");
include_once("includes/footer.php");
?>
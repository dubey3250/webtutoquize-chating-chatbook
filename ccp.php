<?php
error_reporting(0);
$m=$_REQUEST['m'];
?>
<html>
<head>
<style>
#k
{
	height:800px;
	width:650px;
	margin:0px auto;
	//border:1px solid;
	margin-top:69px;
}
p
{
	color:blue;
	font-size:30px;
}
span
{
	color:green;
	font-size:25px;
}
</style>
</head>


<body>
<div id="k">
<?php
	if($m==0)
	{
?>		
	<p>A simple program for Printing a message.</p>
	<span>
	
	<p>//Hello World Program</p>
	#include "iostream.h"<br/>
#include "stdio.h" <br/>
#include "conio.h" <br/>
void main()<br/>
{<br/>
	cout<<"Hello C++!";</br>
	getch();<br/>
}<br/>
	</span>
		
	
<?php
	}
?>	
<?php
	if($m==1)
	{
?>		
	<p>A simple program for two number addition </p>
	
	<span>
	
	<p>//Addition Program.</p>
	#include "iostream.h"<br/>
#include "stdio.h" <br/>
#include "conio.h" <br/>
void main()<br/>
{<br/>
	int sum,p=10,q=30;</br>
	sum=p+q;<br/>
	printf("sum=%d",sum);</br>
	getch();<br/>
}<br/>
	</span>
	
<?php
	}
?>
<?php
	if($m==2)
	{
?>		
	<p>A simple program for two number addition ,taking  input by  user. </p>
	
	<span>
	
	<p>//Addition Program</p>
#include "iostream.h"<br/>	
#include "stdio.h" <br/>
#include "conio.h" <br/>
void main()<br/>
{<br/>
	int sum,p,q;</br>
	clrscr();//for clear screen...<br/>
	cout<<"enter the two number..";</br>
	cin>>p>>q;</br>
	sum=p+q;<br/>
	printf("sum=%d",sum);</br>
	getch();<br/>
}<br/>
	</span>
	
<?php
	}
?>


<?php
	if($m==3)
	{
?>		
	<p>A simple program of inheritance.</p>
	
	<span>
	
	<p>//Average Program.</p>
	#include "iostream.h"<br/>
#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	private:<br/>
	int c;<br/>
	public:<br/>
	int p,q,r;<br/>
		void fun();<br/>
	protected:<br/>
	int s,e;<br/>
}<br/>
void base::fun()<br/>
{<br/>
	cout<<"enter the number\n";<br/>
	cin>>s>>e>>p>>q>>r;<br/>
	s=s+e+q+p+r;<br/>
	printf("%d",s);<br/>
}<br/>
class derived:public base<br/>
{<br/>
	public:<br/>
	int c;<br/>
	void fun1()<br/>
	{<br/>
		cout<<"vss\n";<br/>
		c=s/5;<br/>
		printf("avg=%d",c);<br/>
	}<br/>
}<br/>
void main()<br/>
{<br/>
	derived ob;</br>
	ob.fun();<br/>
	ob.fun1();<br/>
	getch();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==4)
	{
?>		
	<p>A simple program for two number subtraction </p>
	
	<span>
	
	<p>//Subtraction  Program.</p>
#include "iostream.h"<br/>	
#include "stdio.h" <br/>
#include "conio.h" <br/>
void main()<br/>
{<br/>
	int sub,p=10,q=30;</br>
	clrscr();<br/>
	sum=p-q;<br/>
	printf("sub=%d",sub);</br>
	getch();<br/>
}<br/>
	</span>
	
<?php
	}
?>
<?php
	if($m==5)
	{
?>		
	<p>A simple program for two number subtraction ,taking  input by  user. </p>
	
	<span>
	
	<p>//Subtraction Program</p>
#include "iostream.h"<br/>	
#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
	int sub,p,q;</br>
	void fun()<br/>
	{<br/>
	clrscr();//for clear screen...<br/>
	printf("enter the two number..");</br>
	scanf("%d %d",&p,&q);</br>
	sub=p-q;<br/>
	printf("sub=%d",sub);</br>
	getch();<br/>
	}<br/>
}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==6)
	{
?>		
	<p>A simple program to check Even-Odd number. </p>
	
	<span>
	
	<p>//Even-Odd Program</p>
#include "iostream.h"<br/>	
#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
	int n;</br>
void fun()<br/>
{<br/>
	clrscr();//for clear screen...<br/>
	printf("enter the number..");</br>
	scanf("%d",&n);</br>
	if(n%2==0)<br/>
	{<br/>
		printf("Even number=%d",n);<br/>
	}<br/>
	else<br/>
	{<br/>
		printf("Odd number=%d",n);<br/>
	}<br/>
	getch();<br/>
}<br/>
}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==7)
	{
?>		
	<p>A Syntax for if-else statements.</p>
	
	<span>
	
	<p>//if-else statements.</p>
if(<i>Conditions</i>)<br/>
{<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}
else <br/>
{<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==8)
	{
?>		
	<p>A Syntax for else-if statements.</p>
	
	<span>
	
	<p>//else-if statements.</p>
if(<i>Conditions</i>)<br/>
{<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}<br/>
else if(<i>Conditions</i>) <br/>
{<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}<br/>
else if(<i>Conditions</i>) <br/>
{<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==9)
	{
?>		
	<p>A Syntax for do-while loop.</p>
	
	<span>
	
	<p>//do-while loop.</p>
do<br/>
{<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}<br/>
while(<i>Conditions</i>);<br/>
	</span>
	
<?php
	}
?>


<?php
	if($m==10)
	{
?>		
	<p>A Syntax for while-loop.</p>
	
	<span>
	
	<p>//while loop</p>
while(<i>Conditions</i>);<br/>
{<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==11)
	{
?>		
	<p>A Syntax to for-loop.</p>
	
	<span>
	
	<p>//for loop</p>
for(<i>initializations;</i><i>Conditions;</i><i>increment,decrement</i>);<br/>
{<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}<br/>
	</span>
	
<?php
	}
?>


<?php
	if($m==12)
	{
?>		
	<p>A Syntax for switch statement.</p>
	
	<span>
	
	<p>//switch statement.</p>
switch(<i>Expressions</i>);//expression can be only character constant or integer constant. <br/>
{<br/>
	case value-1:<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
	case value-2:<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
	case value-2:<br/>
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
	defualt:
	statement1;</br/>
	statement2;<br/>
	statement3;<br/>
	.<br/>
	.<br/>
	.<br/>
	statement n;<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==13)
	{
?>		
	<p>A program using if-else statements.</p>
	
	<span>
	
	<p>//if-else statements.</p>
#include "iostream.h"<br/>	
#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
	int n;</br>
void fun()<br/>
{<br/>
	int n;</br>
	clrscr();//for clear screen...<br/>
	printf("enter the number..");</br>
	scanf("%d",&n);</br>
if(<i>n<=100</i>)<br/>
{<br/>
	printf("hello! the number is less than or equal to 100");</br/>
}<br/>
else <br/>
{<br/>
	printf("bye! the number is greater than 100");</br/>
}<br/>
	getch();<br/>
}<br/>
}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==14)
	{
?>		
	<p>A program using else-if statements.</p>
	
	<span>
	
	<p>//else-if statements.</p>
#include "iostream.h"<br/>	
#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
	int n;</br>
void fun()<br/>
{<br/>
	clrscr();//for clear screen...<br/>
	printf("enter the mark of a single subject ..");</br>
	scanf("%d",&n);</br>
if(<i>n>=60</i>)<br/>
{<br/>
	printf("congrates! you are passed first div with 60 or above  60 pecent marks...");</br/>
}<br/>
else if(<i>n>=45</i>)<br/>
{<br/>
	printf("congrates! you are passed second div with 45 or above  45 pecent marks...");</br/>
}<br/>
else if(<i>n>=33</i>)<br/>
{<br/>
	printf("congrates! you are passed third div with 33 or above  33 pecent marks...");</br/>
}<br/>
	getch();<br/>
}<br/>
}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==15)
	{
?>		
	<p>A program using while-loop.</p>
	
	<span>
	
	<p>//while loop</p>
	#include "iostream.h"<br/>
	#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
	int n;</br>
void fun()<br/>
{<br/>
	int n;</br>
	clrscr();//for clear screen...<br/>
	printf("enter the number of term ..");</br>
	scanf("%d",&n);</br>
while(<i>n</i>)<br/>
{<br/>
	printf("hello! n=%d",n);</br/>
	n--;<br/>
}<br/>
getch();<br/>
}<br/>
}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==16)
	{
?>		
	<p>A program using for-loop.</p>
	
	<span>
	
	<p>//factorial program..</p>
#include "iostream.h"<br/>	
	#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
	int n;</br>
void fun()<br/>
{<br/>
	int n,i,f=1;</br>
	clrscr();//for clear screen...<br/>
	printf("enter the number ..");</br>
	scanf("%d",&n);</br>
for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
{<br/>
	f=f*i;<br/>
	printf("hello! f=%d",f);</br/>
}<br/>
getch();<br/>
}<br/>
}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>


<?php
	if($m==17)
	{
?>		
	<p>A program using do-while loop.</p>
	
	<span>
	
	<p>//printing hi!</p>
	#include "iostream.h"<br/>
	#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
void fun()<br/>
{<br/>
	int n;</br>
	clrscr();//for clear screen...<br/>
	printf("enter the number of term ..");</br>
	scanf("%d",&n);</br>
	do{<br/>
		printf("hi!");<br/>
	  }while(<i>n</i>);<br/>

getch();<br/>
}<br/>
	}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==18)
	{
?>		
	<p>A program using for loop.</p>
	
	<span>
	
	<p>//printing all ascii characters !</p>
	#include "iostream.h"<br/>
	#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
void fun()<br/>
{<br/>
	int n;</br>
	clrscr();//for clear screen...<br/>
	printf("all the ascii characters are ..");</br>
	for(<i>n=0;</i><i>n<=255;</i><i>n++</i>)<br/>
	{<br/>
		printf("%c",n);<br/>
	}<br/>
getch();<br/>
}<br/>
	}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>


<?php
	if($m==19)
	{
?>		
	<p>Array.</p>
	
	<span>
	
	<p>//Array declaration.!</p>
	
      int s[10];<br/>
	  <i>//one dimensional array. i.e it  can store 10 element of integer type.</i><br/>
	   char s[10];<br/>
	  <i>//one dimensional array. i.e it  can store 10 element of character type.</i><br/>
	  char s[10][50];<br/>
	   <i>//two dimensional array. i.e it  can store 10 string name of specified size 50 characters.</i><br/>
	   int s[10][10];<br/>
	   <i>//two dimensional array. i.e it  can store 100 element of integer type in matrix form.</i><br/>
      <br/>

	</span>
	
<?php
	}
?>


<?php
	if($m==20)
	{
?>		
	<p>A program using array.</p>
	
	<span>
	
	<p>//sum of all array elements program..</p>
	#include "iostream.h"<br/>
	#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
void fun()<br/>
{<br/>
	int   sum=0,n,s[50],i;</br>
	clrscr();//for clear screen...<br/>
	printf("enter the size of an array ..");</br>
	scanf("%d",&n);</br>
	printf("enter the elements of an array ..");</br>
	for(<i>i=0;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
	scanf("%d",&s[i]);</br>
   }<br/>
for(<i>i=0;</i><i>i<=n;</i><i>i++</i>)<br/>
{<br/>
	sum=sum+s[i];<br/>
}<br/>
printf("sum of an array=%d",sum);</br/>
getch();<br/>
}<br/>
	}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>

	</span>
	
<?php
	}
?>

<?php
	if($m==21)
	{
?>		
	<p>A program using two-D array.</p>
	
	<span>
	
	<p>//Addition of matrix..</p>
	#include "iostream.h"<br/>
	#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
void fun()<br/>
{<br/>
	int   sum=0,n,m,s[20][20],x[20][20],y[20][20],i;</br>
	clrscr();//for clear screen...<br/>
	printf("enter the size of rows And columns ..");</br>
	scanf("%d %d",&n,&m);</br>
	printf("enter the elements of first matrix ..");</br>
	for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
		for(<i>j=1;</i><i>j<=m;</i><i>j++</i>)<br/>
		{<br/>
				scanf("%d",&x[i][j]);<br/>
		}<br/>
   }<br/>
   
   printf("enter the elements of second matrix ..");</br>
	for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
		for(<i>j=1;</i><i>j<=m;</i><i>j++</i>)<br/>
		{<br/>
				scanf("%d",&y[i][j]);<br/>
		}<br/>
   }<br/>
   
    printf("Addition  of  matrix is..");</br>
	for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
		for(<i>j=1;</i><i>j<=m;</i><i>j++</i>)<br/>
		{<br/>
			s[i][j]=x[i][j]+y[i][j];<br/>
				printf("%d/t",s[i][j]);</br/>
		}<br/>
		printf("\n");</br>
   }<br/>
getch();<br/>
}<br/>
	}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==22)
	{
?>		
	<p>A program using two-D array.</p>
	
	<span>
	
	<p>//subtraction of matrix..</p>
#include "iostream.h"<br/>	
	#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
void fun()<br/>
{<br/>
	int   sum=0,n,m,s[20][20],x[20][20],y[20][20],i;</br>
	clrscr();//for clear screen...<br/>
	printf("enter the size of rows And columns ..");</br>
	scanf("%d %d",&n,&m);</br>
	printf("enter the elements of first matrix ..");</br>
	for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
		for(<i>j=1;</i><i>j<=m;</i><i>j++</i>)<br/>
		{<br/>
				scanf("%d",&x[i][j]);<br/>
		}<br/>
   }<br/>
   
   printf("enter the elements of second matrix ..");</br>
	for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
		for(<i>j=1;</i><i>j<=m;</i><i>j++</i>)<br/>
		{<br/>
				scanf("%d",&y[i][j]);<br/>
		}<br/>
   }<br/>
   
    printf("Subtraction  of  matrix is..");</br>
	for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
		for(<i>j=1;</i><i>j<=m;</i><i>j++</i>)<br/>
		{<br/>
			s[i][j]=x[i][j]-y[i][j];<br/>
				printf("%d/t",s[i][j]);</br/>
		}<br/>
		printf("\n");</br>
   }<br/>
getch();<br/>
}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==23)
	{
?>		
	<p>A program using two-D array.</p>
	
	<span>
	
	<p>//sum of rows of matrix elements..</p>
	#include "iostream.h"<br/>
	#include "stdio.h" <br/>
#include "conio.h" <br/>
class base<br/>
{<br/>
	public:<br/>
void fun()<br/>
{<br/>
	int   sum=0,n,m,s[20][20],i;</br>
	clrscr();//for clear screen...<br/>
	printf("enter the size of rows And columns ..");</br>
	scanf("%d %d",&n,&m);</br>
	printf("enter the elements of first matrix ..");</br>
	for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
		for(<i>j=1;</i><i>j<=m;</i><i>j++</i>)<br/>
		{<br/>
				scanf("%d",&s[i][j]);<br/>
		}<br/>
   }<br/>
   
     printf("sum of rows of matrix is..");</br>
	for(<i>i=1;</i><i>i<=n;</i><i>i++</i>)<br/>
   {<br/>
		for(<i>j=1;</i><i>j<=m;</i><i>j++</i>)<br/>
		{<br/>
			sum=sum+s[i][j];<br/>
		}<br/>
		printf("%d/t",sum);</br/>
		sum=0;<br/>
		//printf("\n");</br>
   }<br/>
getch();<br/>
}<br/>
void main()<br/>
{<br/>
	base ob;<br/>
	ob.fun();<br/>
}<br/>
	</span>
	
<?php
	}
?>
</div>
</body>
</html>

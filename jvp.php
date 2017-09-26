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
	<p>//A Program for printing hello.</p>
class q<br/>
{<br/>
	void fun2()<br/>
	{<br/>
		System.out.print("hello");<br/>
	}<br/>
}<br/>
class p<br/>
{<br/>
	public static void main(String arg[])<br/>
	{<br/>
		q ob1=new q();<br/>
		ob1.fun2();<br/>
	}<br/>
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
class q<br/>
{ <br/>
	int x=2,y=9;<br/>
	void fun2()<br/>
	{<br/>
		int z=x+y;<br/>
		System.out.print("sum="+z);<br/>
	}<br/>
}<br/>
class p<br/>
{<br/>
	public static void main(String arg[])<br/>
	{<br/>
		q ob1=new q();<br/>
		ob1.fun2();<br/>
	}<br/>
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
import  java.util.*;<br/>
class t<br/>
{<br/>
	public void fun()<br/>
	{<br/>
		int x,y,z;<br/>
		Scanner ob=new Scanner(System.in);<br/>
		System.out.println("enter the two no...");<br/>
		x=ob.nextInt();<br/>
		y=ob.nextInt();<br/>
		z=x+y;<br/>
		System.out.println("sum="+z);<br/>
	}<br/>
} <br/>
public class mm<br/>
{<br/>
	public static void main(String df[])<br/>
	{<br/>
		t ob=new t();<br/>
		ob.fun();<br/>
	}<br/>
}<br/>
	</span>
	
<?php
	}
?>
<?php
	if($m==3)
	{
?>		
	<p>A simple program for two number subtraction </p>
	
	<span>
	
	<p>//Subtraction  Program.</p>
class q<br/>
{ <br/>
	int x=2,y=9;<br/>
	void fun2()<br/>
	{<br/>
		int z=x-y;<br/>
		System.out.print("sum="+z);<br/>
	}<br/>
}<br/>
class p<br/>
{<br/>
	public static void main(String arg[])<br/>
	{<br/>
		q ob1=new q();<br/>
		ob1.fun2();<br/>
	}<br/>
}<br/>
	</span>
	
<?php
	}
?>
<?php
	if($m==4)
	{
?>		
	<p>A simple program for two number subtraction ,taking  input by  user. </p>
	
	<span>
	
	<p>//Subtraction Program</p>
import  java.util.*;<br/>
class t<br/>
{<br/>
	public void fun()<br/>
	{<br/>
		int x,y,z;<br/>
		Scanner ob=new Scanner(System.in);<br/>
		System.out.println("enter the two no...");<br/>
		x=ob.nextInt();<br/>
		y=ob.nextInt();<br/>
		z=x-y;<br/>
		System.out.println("sum="+z);<br/>
	}<br/>
} <br/>
public class mm<br/>
{<br/>
	public static void main(String df[])<br/>
	{<br/>
		t ob=new t();<br/>
		ob.fun();<br/>
	}<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==5)
	{
?>		
	<p>A simple program to check Even-Odd number. </p>
	
	<span>
	
	<p>//Even-Odd Program</p>
import  java.util.*;<br/>
class t<br/>
{<br/>
	public void fun()<br/>
	{<br/>
		int n;<br/>
		Scanner ob=new Scanner(System.in);<br/>
		System.out.println("enter the no...");<br/>
		n=ob.nextInt();<br/>
		System.out.println("enter the numbers to check...");<br/>
		if(n%2==0)<br/>
		{<br/>
			System.out.println("number is even="+n);<br/>
		}<br/>
		else<br/>
		{<br/>
			System.out.println("number is odd="+n);<br/>
		}<br/>
	}<br/>
} <br/>
public class mm1<br/>
{<br/>
	public static void main(String df[])<br/>
	{<br/>
		t ob=new t();<br/>
		ob.fun();<br/>
	}<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==6)
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
	if($m==7)
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
	if($m==8)
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
	if($m==9)
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
	if($m==10)
	{
?>		
	<p>A Syntax to for-loop.</p>
	
	<span>
	
	<p>//for loop</p>
for(<i>initializations;</i><i>Conditions;</i><i>increment,decrement</i>)<br/>
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
	if($m==12)
	{
?>		
	<p>A program for finding  greatest number...</p>
	
	<span>
	
	<p>//Greatest number</p>
	
import  java.util.*;<br/>
class t<br/>
{<br/>
	public void fun()<br/>
	{<br/>
		int x[]=new int[50],n,m,max;<br/>
		Scanner ob=new Scanner(System.in);<br/>
		System.out.println("enter the no. of term..");<br/>
		n=ob.nextInt();<br/>
		System.out.println("enter the numbers to check...");<br/>
		for(<i>int i=0;</i><i>i<<n;</i><i>i++</i>)<br/>
		{<br/>
			x[i]=ob.nextInt();<br/>
		}<br/>
		max=x[0];<br/>
		for(<i>int i=0;</i><i>i<<n;</i><i>i++</i>)<br/>
		{<br/>
			if(<i>max<(x[i]))</i><br/>
			{<br/>
				max=x[i];<br/>
			}<br/>
		}<br/>
		System.out.println("greatest number is="+max);<br/>
	}<br/>
} <br/>
public class mm<br/>
{<br/>
	public static void main(String df[])<br/>
	{<br/>
		t ob=new t();<br/>
		ob.fun();<br/>
	}<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==13)
	{
?>		
	<p>A program using package.</p>
	
	<span>
	
	<p>//Package example .</p>
	
package pkg; //B.java :-creation if package</br>
public class B<br/>
{<br/>
	public void print()<br/>
		{<br/>
			System.out.println("pkg");<br/>
		}<br/>
}<br/><br/>

import pkg.*;//p.java :- Use of package<br/>
class q<br/>
{<br/>
	void fun2()<br/>
	{<br/>
		System.out.print("hello");<br/>
	}<br/>
}<br/>
class p<br/>
{<br/>
	public static void main(String arg[])<br/>
	{<br/>
		B ob=new B();<br/>
		ob.print();<br/>
		q ob1=new q();<br/>
		ob1.fun2();<br/>
	}<br/>
}<br/>
	</span>
	
<?php
	}
?>

<?php
	if($m==14)
	{
?>		
	<p>A program of calculator.</p>
	
	<span>
	
	<p>//Calculator..</p>
	
import javax.swing.*;   <br/>
import java.awt.event.*;<br/>
 
 
public class Calc implements ActionListener<br/>
{<br/>
    JFrame f;<br/>
    JTextField t;<br/>
    JButton b1,b2,b3,b4,b5,b6,b7,b8,b9,b0,bdiv,bmul,bsub,badd,bdec,beq,bdel,bclr;<br/>
 
    static double a=0,b=0,result=0;<br/>
    static int operator=0;<br/>
 
    Calc()<br/>
    {<br/>
        f=new JFrame("Calculator");<br/>
        t=new JTextField();<br/>
        b1=new JButton("1");<br/>
        b2=new JButton("2");<br/>
        b3=new JButton("3");<br/>
        b4=new JButton("4");<br/>
        b5=new JButton("5");<br/>
        b6=new JButton("6");<br/>
        b7=new JButton("7");<br/>
        b8=new JButton("8");<br/>
        b9=new JButton("9");<br/>
        b0=new JButton("0");<br/>
        bdiv=new JButton("/");<br/>
        bmul=new JButton("*");<br/>
        bsub=new JButton("-");<br/>
        badd=new JButton("+");<br/>
        bdec=new JButton(".");<br/>
        beq=new JButton("=");<br/>
        bdel=new JButton("Delete");<br/>
        bclr=new JButton("Clear");<br/>
        
        t.setBounds(30,40,280,30);<br/>
        b7.setBounds(40,100,50,40);<br/>
        b8.setBounds(110,100,50,40);<br/>
        b9.setBounds(180,100,50,40);<br/>
        bdiv.setBounds(250,100,50,40);<br/>
        
        b4.setBounds(40,170,50,40);<br/>
        b5.setBounds(110,170,50,40);<br/>
        b6.setBounds(180,170,50,40);<br/>
        bmul.setBounds(250,170,50,40);<br/>
        
        b1.setBounds(40,240,50,40);<br/>
        b2.setBounds(110,240,50,40);<br/>
        b3.setBounds(180,240,50,40);<br/>
        bsub.setBounds(250,240,50,40);<br/>
        
        bdec.setBounds(40,310,50,40);<br/>
        b0.setBounds(110,310,50,40);<br/>
        beq.setBounds(180,310,50,40);<br/>
        badd.setBounds(250,310,50,40);<br/>
        
        bdel.setBounds(60,380,100,40);<br/>
        bclr.setBounds(180,380,100,40);<br/>
        
        f.add(t);<br/>
        f.add(b7);<br/>
        f.add(b8);<br/>
        f.add(b9);<br/>
        f.add(bdiv);<br/>
        f.add(b4);<br/>
        f.add(b5);<br/>
        f.add(b6);<br/>
        f.add(bmul);<br/>
        f.add(b1);<br/>
        f.add(b2);<br/>
        f.add(b3);<br/>
        f.add(bsub);<br/>
        f.add(bdec);<br/>
        f.add(b0);<br/>
        f.add(beq);<br/>
        f.add(badd);<br/>
        f.add(bdel);<br/>
        f.add(bclr);<br/>
        
        f.setLayout(null);<br/>
        f.setVisible(true);<br/>
        f.setSize(350,500);<br/>
     f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);<br/>
        f.setResizable(false);<br/>
        
        b1.addActionListener(this);<br/>
        b2.addActionListener(this);<br/>
        b3.addActionListener(this);<br/>
        b4.addActionListener(this);<br/>
        b5.addActionListener(this);<br/>
        b6.addActionListener(this);<br/>
        b7.addActionListener(this);<br/>
        b8.addActionListener(this);<br/>
        b9.addActionListener(this);<br/>
        b0.addActionListener(this);<br/>
        badd.addActionListener(this);<br/>
        bdiv.addActionListener(this);<br/>
        bmul.addActionListener(this);<br/>
        bsub.addActionListener(this);<br/>
        bdec.addActionListener(this);<br/>
        beq.addActionListener(this);<br/>
        bdel.addActionListener(this);<br/>
        bclr.addActionListener(this);<br/>
    }<br/>
    public void actionPerformed(ActionEvent e)<br/>
    {<br/>
        if(e.getSource()==b1)<br/>
            t.setText(t.getText().concat("1"));<br/>
        
        if(e.getSource()==b2)<br/>
            t.setText(t.getText().concat("2"));<br/>
        
        if(e.getSource()==b3)<br/>
            t.setText(t.getText().concat("3"));<br/>
        
        if(e.getSource()==b4)<br/>
            t.setText(t.getText().concat("4"));<br/>
        
        if(e.getSource()==b5)<br/>
            t.setText(t.getText().concat("5"));<br/>
        
        if(e.getSource()==b6)<br/>
            t.setText(t.getText().concat("6"));<br/>
        
        if(e.getSource()==b7)<br/>
            t.setText(t.getText().concat("7"));<br/>
        
        if(e.getSource()==b8)<br/>
            t.setText(t.getText().concat("8"));<br/>
        
        if(e.getSource()==b9)<br/>
            t.setText(t.getText().concat("9"));<br/>
        
        if(e.getSource()==b0)<br/>
            t.setText(t.getText().concat("0"));<br/>
        
        if(e.getSource()==bdec)<br/>
            t.setText(t.getText().concat("."));<br/>
        
        if(e.getSource()==badd)<br/>
        {
            a=Double.parseDouble(t.getText());<br/>
            operator=1;<br/>
            t.setText("");<br/>
        } <br/>
        if(e.getSource()==bsub)<br/>
        {<br/>
            a=Double.parseDouble(t.getText());<br/>
            operator=2;<br/>
            t.setText("");<br/>
        }<br/>
        if(e.getSource()==bmul)<br/>
        {<br/>
            a=Double.parseDouble(t.getText());<br/>
            operator=3;<br/>
            t.setText("");<br/>
        }<br/>
        if(e.getSource()==bdiv)<br/>
        {<br/>
            a=Double.parseDouble(t.getText());<br/>
            operator=4;<br/>
            t.setText("");<br/>
        }<br/>
        if(e.getSource()==beq)<br/>
        {<br/>
            b=Double.parseDouble(t.getText());<br/>
        
            switch(operator)<br/>
            {<br/>
                case 1: result=a+b;<br/>
                    break;<br/>
        
                case 2: result=a-b;<br/>
                    break;<br/>
        
                case 3: result=a*b;<br/>
                    break;<br/>
        
                case 4: result=a/b;<br/>
                    break;<br/>
        
                default: result=0;<br/>
            }<br/>
            t.setText(""+result);<br/>
        }<br/>
        if(e.getSource()==bclr)<br/>
            t.setText("");   <br/>
        if(e.getSource()==bdel)<br/>
        {<br/>
            String s=t.getText();<br/>
            t.setText("");<br/>
            for(i>int i=0;</i><i>i<ch.length-1</i><i>;</i><i>i++</i>)<br/>
            t.setText(t.getText()+s.charAt(i));<br/>
        }        <br/>
    } <br/>
    public static void main(String s[])<br/>
    {<br/>
        new Calc();<br/>
    }<br/>
}<br/>


	</span>
	
<?php
	}
?>

<?php
	if($m==15)
	{
?>		
	<p>A simple Calculator  in java  using awt .</p>
	
	<span>
	
	import java.awt.*;//importing a package<br/>
import java.awt.event.*;<br/>
public class myframe extends Frame implements ActionListener<br/>
{<br/>
		
	Label l1,l2,l3;<br/>
	TextField t1,t2,t3,v;<br/>
	Button b1,b2,b3,b4,b5,b6,b7;<br/>
	float p;<br/>
	myframe()<br/>
	{<br/>
		setBackground(Color.blue);<br/>
		Color b=new Color(33,33,43);<br/>
		l1=new Label("first value");<br/>
		l2=new Label("second value");<br/>
		l3=new Label("result");<br/>
		t1=new TextField(10);<br/>
		t2=new TextField(10);<br/>
		t3=new TextField(10);<br/>
		b1=new Button("add");<br/>
		b2=new Button("sub");<br/>
		b3=new Button("mul");<br/>
		b4=new Button("div");<br/>
		b5=new Button("clear");<br/>
		b6=new Button("Ans");<br/>
		b7=new Button("mod");<br/>
		add(l1);<br/>
		add(l2);<br/>
		add(l3);<br/>
		add(t1);<br/>
		add(t2);<br/>
		add(t3);<br/>
		add(b1);<br/>
		add(b2);<br/>
		add(b3);<br/>
		add(b4);<br/>
		add(b5);<br/>
		add(b6);<br/>
		add(b7);<br/>
		setLayout(null);<br/>
		l1.setBounds(100,100,80,20);<br/>
		t1.setBounds(200,100,80,25);<br/>
		l2.setBounds(100,130,80,20);<br/>
		t2.setBounds(200,130,80,25);<br/>
		l3.setBounds(100,160,80,20);<br/>
		t3.setBounds(200,160,80,25);<br/>
		
		b1.setBounds(100,200,60,20);<br/>
		b2.setBounds(150,200,60,20);<br/>
		b3.setBounds(100,220,60,20);<br/>
		b4.setBounds(150,220,60,20);<br/>
		b5.setBounds(200,200,60,40);<br/>
		b6.setBounds(100,240,60,20);<br/>
		b7.setBounds(160,240,100,20);<br/>
		b1.addActionListener(this);<br/>
		b2.addActionListener(this);<br/>
		b3.addActionListener(this);<br/>
		b4.addActionListener(this);<br/>
		b5.addActionListener(this);<br/>
		b6.addActionListener(this);<br/>
		b7.addActionListener(this);<br/>
		
		addWindowListener(new WindowAdapter()<br/>
		{<br/>
            public void windowClosing(WindowEvent we)<br/>
			{ System.exit(0); }<br/>
		});<br/>
		
		
		setSize(800,700);<br/>
		setVisible(true);<br/>
	}	<br/>
	
		public void actionPerformed(ActionEvent e)<br/>
		{<br/>
			float x=Float.parseFloat(t1.getText());<br/>
			float y=Float.parseFloat(t2.getText());<br/>
			if(e.getSource()==b1)<br/>
			{<br/>
				float z=x+y;<br/>
				t3.setText(String.valueOf(z));<br/>
                p=Float.parseFloat(t3.getText());<br/>
			}<br/>
			else if(e.getSource()==b2)<br/>
			{<br/>
				float z=x-y;<br/>
				t3.setText(String.valueOf(z));<br/>
				p=Float.parseFloat(t3.getText());<br/>
			}<br/>
			else if(e.getSource()==b3)<br/>
			{<br/>
				float z=x*y;<br/>
				t3.setText(String.valueOf(z));<br/>
				p=Float.parseFloat(t3.getText());<br/>
			}<br/>
			else if(e.getSource()==b4)<br/>
			{<br/>
				float z=x/y;<br/>
				t3.setText(String.valueOf(z));<br/>
				p=Float.parseFloat(t3.getText());<br/>
			}<br/>
			else if(e.getSource()==b7)<br/>
			{<br/>
				float z=x%y;<br/>
				t3.setText(String.valueOf(z));<br/>
				p=Float.parseFloat(t3.getText());<br/>
			}<br/>
			else if(e.getSource()==b5)<br/>
			{<br/>
				//float z=x/y;<br/>
				//t1.setText(" ");<br/>
				//t2.setText(" ");<br/>
				//v.getText();<br/>
				t3.setText(" ");<br/>
			}<br/>
			else if(e.getSource()==b6)<br/>
			{<br/>
			
				//float z=Float.parseFloat(t3.getText());<br/>
				t3.setText(String.valueOf(p));<br/>
			}<br/>
			
	}<br/>
	public static void main(String arg[])<br/>
	{<br/>
		new myframe();<br/>
	}<br/>
}<br/>

	</span>
	
<?php
	}
?>


<?php
	if($m==16)
	{
?>		
	<p>A program for Calculator.</p>
	
	<span>
	
	<p>//Calculator using awt!</p>
	
import java.awt.*;<br/>
import java.awt.event.*;<br/>
public class myframe2 extends Frame  implements ActionListener<br/>
{	<br/>
	Label l1;<br/>
	TextField t1;<br/>
	Button b1[]=new Button[30];<br/>
	Button eql;<br/>
	String str,str1="0",str2="0",str3;<br/>
	float x,y,z,f=0;<br/>
    float c;<br/>
	float f2=1;<br/>
	char ch[]={'1','2','3','4','5','6','7','8','9','0','!','.','R','C','+','-','*','/','%','='};<br/>
	myframe2()<br/>
	{<br/>
		setBackground(Color.green);<br/>
		setForeground(Color.white);<br/>
		setTitle("Java Calculator...");<br/>
	//	Color b=new Color(33,33,43,12);<br/>
		t1=new TextField("clcultor.",10);<br/>
		add(t1);<br/>
		t1.setBackground(Color.pink);<br/>
		
		addWindowListener(new WindowAdapter(){public void windowClosing(WindowEvent we){System.exit(0);}}); //for closing  frame window<br/>
		
	    for(<i>int i=0;</i><i>i<<ch.length<i>;</i></i><i>i++</i>)<br/>
		{<br/>
			b1[i]=new Button(String.valueOf(ch[i]));<br/>
			add(b1[i]);<br/>
		}<br/>
		for(<i>int i=0;</i><i>i<<ch.length<i>;</i></i><i>i++</i>)<br/>
		{<br/>
			if(<i>!Character.isDigit(ch[i])</i>)<br/>
			{<br/>
				b1[i].setBackground(Color.black);<br/>	
			}<br/>
			else<br/>
			{<br/>
				b1[i].setBackground(Color.blue);<br/>
			}<br/>
		}<br/>
		setLayout(new GridLayout(7,3));<br/>
		for(<i>int i=0;</i><i>i<<ch.length<i>;</i></i><i>i++</i>)<br/>
		{<br/>
			b1[i].addActionListener(this);<br/>
		}		<br/>
		setSize(400,400);<br/>
		setVisible(true);<br/>
	}	<br/>
	public void actionPerformed(ActionEvent e)<br/>
	{<br/>
		str=e.getActionCommand();<br/>
		//str1=str1+str;<br/>
		t1.setText(t1.getText()+str);<br/>
		char ch=str.charAt(0);<br/>
		if(Character.isDigit(ch))<br/>
		{<br/>
			str2=str2+String.valueOf(ch);<br/>
			y=Float.parseFloat(str2);<br/>
		}<br/>
		else if(e.getSource()==b1[11])<br/>
		{<br/>
			str2=str2+String.valueOf(ch);<br/>
		}<br/>
		else if(e.getSource()==b1[14])<br/>
		{<br/>
			f=1;<br/>
			str3=str2;<br/>
			str2="0";<br/>
		}<br/>
		else if(e.getSource()==b1[15])<br/>
		{<br/>
			f=2;<br/>
			str3=str2;<br/>
			str2="0";<br/>
		}<br/>
		else if(e.getSource()==b1[16])<br/> 
		{<br/>
			f=3;<br/>
			str3=str2;<br/>
			str2="0";<br/>
		}<br/>
		else if(e.getSource()==b1[17])<br/>
		{<br/>
			f=4;<br/>
			str3=str2;<br/>
			str2="0";<br/>
		}<br/>
		else if(e.getSource()==b1[18])<br/>
		{<br/>
			f=5;<br/>
			str3=str2;<br/>
			str2="0";<br/>
		}<br/>
		else if(e.getSource()==b1[10])<br/>
		{<br/>
			f=6;<br/>
			str3=str2;<br/>
			str2="0";<br/>
		}<br/>
		  if(e.getSource()==b1[19])<br/>
			{<br/>
				  x=Float.parseFloat(str3);<br/>
				  str3="0"; <br/>
				  str2="0";<br/>
				 if(f==1)<br/>
				 {<br/>
					 z=x+y;<br/>
					 t1.setText(String.valueOf(z));<br/>
					 c=Float.parseFloat(t1.getText());<br/>
					 str2=String.valueOf(c);<br/>
				 }<br/>
				 if(f==2)<br/>
				 {<br/>
					 z=x-y;<br/>
					 t1.setText(String.valueOf(z));<br/>
					 c=Float.parseFloat(t1.getText());<br/>
					 str2=String.valueOf(c);<br/>
				 }<br/>
				 if(f==3)<br/>
				 {<br/>
					 z=x*y;<br/>
					 t1.setText(String.valueOf(z));<br/>
					 c=Float.parseFloat(t1.getText());<br/>
					 str2=String.valueOf(c);<br/>
				 }<br/>
				 if(f==4)<br/>
				 {<br/>
					 if(y==0)<br/>
					 {<br/>
						 t1.setText("can't divided by zero.");<br/>
					 }<br/>
					 else<br/>
					 {<br/>
					 z=x/y;<br/>
					 t1.setText(String.valueOf(z));<br/>
					 c=Float.parseFloat(t1.getText());<br/>
					 str2=String.valueOf(c);<br/>
					 }<br/>
				 }<br/>
				 if(f==5)<br/>
				 {<br/>
					 z=x%y;<br/>
					 t1.setText(String.valueOf(z));<br/>
					 c=Float.parseFloat(t1.getText());<br/>
					 str2=String.valueOf(c);<br/>
				 }<br/>
				 if(f==6)<br/>
				 {<br/>
					 f2=1;<br/>
					 for(<i>float i=1;</i><i>i<=x;</i><i>i++</i>)<br/>
					 {<br/>
					  f2=f2*i;<br/>
					 } <br/>
					  t1.setText(String.valueOf(f2));<br/>
					 c=Float.parseFloat(t1.getText());<br/>
					 str2=String.valueOf(c);<br/>
				 }<br/>
			 } <br/>
			else if(e.getSource()==b1[12])<br/>
			{<br/>
				t1.setText(String.valueOf(c));<br/>
				str2=String.valueOf(c);<br/>
			}<br/>
			else if(e.getSource()==b1[13])<br/>
			{<br/>
				t1.setText(" ");<br/>
				str2="0";<br/>
			}<br/>				
	}	<br/>
	public static void main(String arg[])<br/>
	{<br/>
		new myframe2();<br/>
	}<br/>
}<br/>

	</span>
	
<?php
	}
?>

<?php
	if($m==17)
	{
?>		
	<p>A program which would calculate Age of a person.</p>
	
	<span>
	
	<p>//calculate Age!</p>
import  java.util.*;<br/>
import java.text.*;  <br/>
import java.awt.event.*;<br/>
import java.awt.*;<br/>
//import java.util.Date; <br/>
//import java.text.SimpleDateFormat;  <br/>
public class myframe3 extends Frame implements ActionListener<br/>
{<br/>
	String strcur,msg;<br/>
	String strd,strm,stry,str1,str2;<br/>
	TextField t1;<br/>
	int d,m,y,d1,m1,y1,cd,cm,cy,f;<br/>
	Button b1[]=new Button[20];<br/>
	String ch1,ch2,ch3,res;<br/>
	char ch[]={'1','2','3','4','5','6','7','8','9','0','=','C','/','-',':'};<br/>
	myframe3()<br/>
	{<br/>
	//returns current time with including hour,minute,second...<br/> 
		Date date = new Date();  <br/>
		SimpleDateFormat formatter = new SimpleDateFormat("dd:MM:yyyy"); <br/> 
		strcur=formatter.format(date); <br/>
		
		strd=strcur.substring(0,2);<br/>
		strm=strcur.substring(3,5);<br/>
		stry=strcur.substring(6,10);<br/><br/>
			cd=Integer.parseInt(strd);<br/>
			cm=Integer.parseInt(strm);<br/>
			cy=Integer.parseInt(stry);<br/><br/>
		//System.out.println(cy);  <br/>
		t1=new TextField(10);<br/>
		add(t1);<br/>
		setForeground(Color.blue);<br/>
		t1.setBackground(Color.pink);<br/>
		setTitle("Age Calculator...");<br/>
		
		  addWindowListener(new WindowAdapter(){public void windowClosing(WindowEvent we){System.exit(0);}}); //for closing  frame window<br/>
		  
		
	    for(i>int i=0;</i><i>i<ch.length</i><i>;</i><i>i++</i>)<br/>
		{<br/>
			b1[i]=new Button(String.valueOf(ch[i]));<br/>
			add(b1[i]);<br/>
		}<br/>
		for(<i>int i=0;</i><i>i<ch.length</i><i>;</i><i>i++</i>)<br/>
		{<br/>
			b1[i].setBackground(Color.black);<br/>
		}<br/>
		setLayout(new GridLayout(4,3,10,10));<br/>
		for(i>int i=0;</i><i>i<ch.length</i><i>;</i><i>i++</i>)<br/>
		{<br/>
			b1[i].addActionListener(this);<br/>
		}		<br/>
		setSize(700,300);<br/>
		setVisible(true);<br/>
		setResizable(false);<br/>
	}	<br/>
	public void actionPerformed(ActionEvent e)<br/>
	{<br/>
		str1=e.getActionCommand();<br/>
		str2=t1.getText()+str1;<br/>
		t1.setText(str2);<br/>
		if(e.getSource()==b1[10])<br/>
		{<br/>
			//t1.setText(" ");<br/>
			try<br/>
			{<br/>
				ch1=str2.substring(0,2);<br/>
				ch2=str2.substring(3,5);<br/>
				ch3=str2.substring(6,10);	<br/><br/>
				
				d=Integer.parseInt(ch1);<br/>
				m=Integer.parseInt(ch2);<br/>
				y=Integer.parseInt(ch3);<br/><br/>
				d1=cd-d;<br/>
				m1=cm-m;<br/>
				y1=cy-y;<br/><br/>
				if(d1<0)<br/>
				{<br/>
					m1=m1-1;<br/>
					d1=(30-(-d1));<br/>
				}<br/>
				else if(m1<0)<br/>
				{<br/>
					y1=y1-1;<br/>
					m1=(12-(-m1));<br/>
				}<br/>
				t1.setText("year="+y1+" month="+m1+" day="+d1);<br/>
			}<br/>
			catch(Exception siobe)<br/>
			{<br/>
				f=1;<br/>
			}<br/>
			if(f==1)<br/>
			{<br/><br/>
				ch1=str2.substring(0,1);<br/>
				ch2=str2.substring(2,3);<br/>
				ch3=str2.substring(4,8);<br/><br/>
				
				d=Integer.parseInt(ch1);<br/>
				m=Integer.parseInt(ch2);<br/>
				y=Integer.parseInt(ch3);<br/><br/>
				d1=cd-d;<br/>
				m1=cm-m;<br/>
				y1=cy-y;<br/><br/>
				if(d1<0)<br/>
				{<br/>
					m1=m1-1;<br/>
					d1=(30-(-d1));<br/>
				}<br/>
				else if(m1<0)<br/>
				{<br/>
					y1=y1-1;<br/>
					m1=(12-(-m1));<br/>
				}<br/>
				t1.setText("year="+y1+" month="+m1+" day="+d1);<br/>
			}	<br/>
		}<br/>
		else if(e.getSource()==b1[11])<br/>
		{<br/>
			t1.setText("");<br/>
			str2="0";<br/>
		}<br/>
	} <br/>
	public static void main(String[] args)<br/> 
	{<br/>
		new myframe3();<br/>
	}<br/>
}	<br/>

	</span>
	
<?php
	}
?>


<?php
	if($m==18)
	{
?>		
	<p>A simple Applet program.</p>
	
	<span>
	
	<p>//applet Example!</p>
	
     import java.awt.*;<br/>
import java.applet.*;<br/><br/>

public class simpleapplet1 extends Applet<br/>
{<br/>

    public void init()<br/>
	{
	   setBackground(Color.blue);<br/>
	}<br/>
	public void paint(Graphics g)<br/>
	{<br/><br/>
	
	    g.setColor(Color.red);<br/>
		g.drawString("A simple applet", 20, 20);<br/>
	    g.drawLine(30,300,200,500);<br/>
		
        g.drawOval(100,100,100,100);<br/>
		g.fillOval(100,100,100,100);<br/>
        g.drawRect(400,50,200,100);<br/>
		 g.setColor(Color.yellow);<br/>
		g.fillRect(400,50,200,100);<br/>

	}<br/>
}<br/>

	</span>
	
<?php
	}
?>


<?php
	if($m==19)
	{
?>		
	<p>A program using applet.</p>
	
	<span>
	
	<p>//another applet  example..</p>
	
import java.awt.*;<br/>
import java.awt.event.*;<br/>
import java.applet.*;<br/><br/>

/*<span><applet code = "chek" width=250 height=200><br/>
</applet></span> */<br/><br/>

public class chek1 extends Frame implements ItemListener <br/>
{<br/>
	String msg="";<br/>
	Checkbox c1,c2;<br/>
	//public void init()<br/>
	chek1()<br/>
	{<br/>
		c1=new Checkbox("first");<br/>
		c2=new Checkbox("sec");<br/><br/>
	
		add(c1);<br/>
		add(c2);<br/>
		c1.addItemListener(this);<br/>
		c2.addItemListener(this);<br/>
		FlowLayout f1=new FlowLayout();
		setLayout(f1);<br/>
		setSize(400,500);<br/>
		setVisible(true);<br/>
	}<br/>
	public void itemStateChanged(ItemEvent ie)<br/>
	{	<br/>
		
		repaint();<br/>
	}<br/>
	public void paint(Graphics g)<br/>
	{<br/>
		msg= "current state";<br/>
		g.drawString(msg,6,80);<br/>
		msg="c1::::" + c1.getState();<br/>
		g.drawString(msg,6,100);<br/>
		msg="c2::::" + c2.getState();<br/>
		g.drawString(msg,6,120);<br/>
	}<br/><br/>
	public static void main(String a[])<br/>
	{<br/>
		new chek1();<br/>
	}<br/>
	
	
}<br/>

	</span>
	
<?php
	}
?>

<?php
	if($m==20)
	{
?>		
	<p>A program which shows clock.</p>
	
	<span>
	
	<p>//Clock..</p>
	
	import java.awt.*;<br/>
import java.applet.*;<br/>

import java.applet.*;<br/>
import java.awt.*;<br/>
import java.util.*;<br/><br/>
/*<applet code = "ClockApplet" width=400 height=120>
</applet> */<br/><br/>

public class ClockApplet extends Applet implements Runnable<br/>
{<br/>
	Thread t,t1;<br/>
	public void start()<br/>
	{<br/>
		setBackground(Color.blue);<br/>
		setForeground(Color.red);<br/>
      t = new Thread(this);<br/>
      t.start();<br/>
    }<br/>
    public void run()<br/>
	{<br/>
       //t1 = Thread.currentThread();<br/>
       while(true)<br/>
	   {<br/>
		repaint();<br/>
        try<br/>
		{<br/>
            t1.sleep(1000);<br/>    
        }<br/>
        catch(InterruptedException e){}<br/>
		}<br/>
	}<br/>
	public void paint(Graphics g)<br/>
	{<br/>
      Calendar cal = new GregorianCalendar();<br/>
      String hour = String.valueOf(cal.get(Calendar.HOUR));<br/>
      String minute = String.valueOf(cal.get(Calendar.MINUTE));<br/>
      String second = String.valueOf(cal.get(Calendar.SECOND));<br/>
      g.drawString(hour + ":" + minute + ":" + second, 20, 30);<br/>
   }<br/>
}<br/>


	</span>
	
<?php
	}
?>

<?php
	if($m==21)
	{
?>		
	<p>A Simple notepad in java.</p>
	
	<span>
	
	<p>//Notepad in java..</p>
	
	import javax.swing.*;  <br/>
import java.awt.event.*;  <br/><br/>
  
public class note1 implements ActionListener<br/>
{  <br/>
	JFrame f;  <br/>
	JMenuBar mb;  <br/>
	JMenu file,edit,help;<br/>  
	JMenuItem cut,copy,paste,selectAll;<br/>  
	JTextArea ta;  <br/><br/>
      
	note1()<br/>
	{  <br/>
		f=new JFrame();<br/>  
  
		cut=new JMenuItem("cut");  <br/>
		copy=new JMenuItem("copy");  <br/>
		paste=new JMenuItem("paste");  <br/>
		selectAll=new JMenuItem("selectAll");<br/>  
  
		cut.addActionListener(this);  <br/>
		copy.addActionListener(this);  <br/>
		paste.addActionListener(this);  <br/>
		selectAll.addActionListener(this);  <br/>
  
		mb=new JMenuBar();  <br/>
		mb.setBounds(5,5,400,40);<br/>  
  
		file=new JMenu("File");  <br/>
		edit=new JMenu("Edit");  <br/>
		help=new JMenu("Help");  <br/>
  
		edit.add(cut);edit.add(copy);edit.add(paste);edit.add(selectAll);<br/>  
  
  
		mb.add(file);mb.add(edit);mb.add(help);  <br/>
  
		ta=new JTextArea();  <br/>
		ta.setBounds(5,30,460,460);<br/>  
  
		f.add(mb);f.add(ta);  <br/>
  
		f.setLayout(null);  <br/>
		f.setSize(500,500);  <br/>
		f.setVisible(true);  <br/>
}  <br/>
  
public void actionPerformed(ActionEvent e)<br/>
 {  <br/>
	if(e.getSource()==cut)<br/>  
	ta.cut();  <br/>
	if(e.getSource()==paste)<br/>  
	ta.paste();  <br/>
	if(e.getSource()==copy)  <br/>
	ta.copy();  <br/>
	if(e.getSource()==selectAll)<br/>  
	ta.selectAll();  <br/>
}  <br/>
  
public static void main(String[] args)<br/> 
{  <br/>
    new note1();<br/>  
}  <br/>
}  <br/>

	</span>
	
<?php
	}
?>

<?php
	if($m==22)
	{
?>		
	<p>A simple program  using panel.</p>
	
	<span>
	
	<p>//Example using panel.</p>
	
	import java.awt.*;<br/>
import java.awt.event.*;<br/><br/>

class a extends Panel<br/>
{<br/>

	a()<br/>
	{<br/>
	
	  setBackground(Color.red);<br/>
	 }<br/>

}<br/><br/>

class panel1 extends Frame implements ActionListener<br/>
{	<br/>
	Button ok;<br/>
	Panel p;<br/>
	panel1()<br/>
	{<br/>
	   ok=new Button("Click");<br/>
	   p=new Panel();<br/>
	   p.setBackground(Color.blue);<br/>
		a a1=new a();<br/>
		
		setLayout(null);<br/>
		
		ok.setBounds(30,30,100,30);<br/>
		a1.setBounds(30,150,200,100);<br/>
		p.setBounds(250,150,200,100);<br/>
		add(ok);<br/>
		add(a1);<br/>
		add(p);<br/>
		ok.addActionListener(this);<br/>
		setSize(500,500);<br/>
		setVisible(true);<br/>
	}<br/><br/>

	public void actionPerformed(ActionEvent e)<br/>
	{<br/>
	  if(e.getSource()==ok)<br/>
	  {<br/>
	  
	    Frame w=new Frame();<br/>
		w.setBackground(Color.blue);<br/>
		w.setSize(400,400);<br/>
		w.setVisible(true);<br/>
		}<br/>
	
	}<br/>
	public static void main(String args[])<br/>
	{<br/>
		new panel1();<br/>
	}<br/>
}<br/>
	

	</span>
	
<?php
	}
?>
</div>
</body>
</html>
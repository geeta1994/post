<? php

$servername="localhost";
$username="root";
$password="";
$dbname)="insertdata";


include_once'login'.php;
session_start();
$msg="";
$db=myqli_connect($servername,$username,$password,$dbname);
if($db->connect_error){
	die("connection failed":.$db);

}
if(isset($_'login']))
{
	
	$username=$_POST['first_name'];
	$username=$_POST['last_name'];
	$password=$_POST['email'];
	 $username=$_POST['user_name'];
     $email=$_email['password'];

     $query="INSERT INTO"insertdb(first name,last name,username,email,password); VALUES('$firstname','$lastname,'$username','$email','$password');
     ?>
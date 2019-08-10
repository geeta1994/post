<?php
include('insert.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<title>login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

   <center><h1>Login</h1></center>
   <     
   <div align ="center">
        <div style="background-color:#D3D3D3;width:70px height:30px;>
  
    
  
      <p><i class="fa fa-address-book-o>first name</i><p>    
            <input type ="text" name="First name" placeholder="first name" class="box"/><br/><br/>

           <p><i class="fa fa-address-book">last name</i><p>    

            <input type="text"  name="Last name"  placeholder="last name" class="box"/><br/><br/>
            <p><i class="fa fa-address-card-o"> user name</i></p>

            <input type="User name" name=Username placeholder="input Username" class="box"/><br/><br/>

            <p><i class= "fa-address-book-o"> emailid </i></p>

        <input type="emailid" name=emailid placeholder="emailid" class="box"/><br/><br/>


              <p><i class="fa fa-address-book">password</i></p>  

            <input type="PASSWORD" name=password here placeholder="password" class="box"/><br/><br/>

                  

                       <div class="my_content_container">
                  <button><a href="edit.php"> submit</a></button>
                  <script>
        function validate(){

            var a = document.getElementById("pass").value;
            var b = document.getElementById("cnfirm_pass").value;
            if (a!=b){
               alert("Passwords do no match");
               return false;
            }
        }
     </script>

                      </div>
          </form>
       </div>
   </div>
     </body>
     </html>  
                                     
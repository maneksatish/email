<?php  
if(isset($_POST['login']))
{

$email=$_POST["email"];
$password=$_POST["password"]; 

if($email=="admin" && $password=="admin")
{
    header('location:admin.php');
}
else{
    echo" access denied !";
}
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminlogin</title>

    <style>
        .container{
    background-color: white;
    opacity:.8;
    border-radius:20px;
    padding: 30px 10px;
    margin:100px 400px 0px 400px ;
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;

}

button{
    border: 5px;
    padding: 8px;
    margin-top: 30px ;
    width: 32%;
    border-radius: 5px;
    border:6px;
    cursor: pointer;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 25px;
    transition: width 0.5s,background-color 0.5s;
}

button:hover{

background-color: skyblue;
width: 33%;
color: whitesmoke;
}


.t1{
     text-align: center;
     width: 30%;
     padding: 10px;
     
     border-radius: 5px;
}
.t2{
text-align: center;
    width: 30%;
    padding: 10px;
    
    border-radius: 5px;
}
.p1{
    margin-top: 30px ;
}
.p2{
    margin-top: 30px ;
}

hr{
    margin-top: 50px;
    width: 60%;
}
.p3{
    margin-top: 30px;
    
    
}
.p4{
    text-align: right;
    font-size: smaller;

}
img{
    width:80px;
    text-align: center;
}
body{
    background:url("adminlogin1.jpg");
}


    </style>
   
</head>
<body>
    

    <div class="container">

    <form method="PoST">
        
        <table>
            <header>

                   <img src="settings.png">
                   <h1>ADMIN LOGIN</h1>
                   <hr>
                                                                                                
               </header>
               <main>
                   <p class="p1">Username</p>
                   <input type="text" name="email" class="t1" placeholder="your username">
                   <br/>
                   <p class="p2">Password</p>
                   <input type="password"  name="password" class="t2"  placeholder="Password">
                  <br/>
                   <button type="submit" name="login">Login</button>
               
                   <hr>
               </main>
        
         </table>
        
    
    </form>
    </div>
    
</body>


</html>
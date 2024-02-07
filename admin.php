<html>
    <head>
        <title>Admin page</title>
    <style>
        body{
            background-size: 80;
            background:url("./adminwall.jpg");
    
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-repeat: no-repeat;
        }
        table{
            border:solid 1px;
            width: 60%;
            text-align:center;
            margin-top:30px;
            opacity: .9;
            border-radius:10px;
            
            
        }
        th{
            background:rgba(135, 207, 235, 0.499);

            border-bottom:solid 1px;
            border-left:solid 1px;
            border-right:solid 1px;
            padding:3px;

        }
        td{
            border-bottom:solid 1px;
            padding:6px;
        }
        tr:nth-child(even){
           background-color: rgba(0, 0, 0, 0.2);
        }
        h1{
            text-align:center;

        }
        div{
            text-align:center;
        }
        h1{
            background: hsla(0, 0%, 50%, 0.333);
            border-radius:8px;
            opacity: .8;
            margin-left:100px;
            margin-right:100px;
            padding-left:100px
        }
        .btn{
            text-decoration:none;
            color:white;
            background:black;
            padding:3px 15px;
        
            border-radius:5px;

        }
        .btn:hover{
            background:rgba(255, 0, 0, 0.70);

        }
        a{
            text-decoration:none;
            float:right;
            padding:10px 15px;
            background:rgba(0, 0, 0, 0.890);
            color:red;
            border-radius:8px;
            opacity: .8;
            font-size:15px;
            transition: background-color 0.5s;
        
        }
        a:hover{
            background:rgba(255, 0, 0, 0.548);
            color:rgba(0, 0, 0, 0.890);
        }
        



    </style>

    </head>
    <body>
        <b><a href=adminlogin.php >Logout</a></b> 
        <h1>Users Infomation </h1>
       
        <table align="center" >
        <tr>
        
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Operation</th>

        </tr>
        
       

 <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "email";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_GET['name'])){
    $name=$_GET['name'];
    $delete = mysqli_query($conn,"DELETE FROM `users` WHERE `person_fullname`='$name'");
   
}


$query = "SELECT * FROM USERS";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

//echo "".$total;
$result = mysqli_fetch_assoc($data);




if($total!=0){
     while($result=mysqli_fetch_assoc($data))
     {
        echo "
        <tr>
        
        <td>".$result['person_fullname']."</td>
        <td>".$result['person_email']."</td>
        <td>".$result['person_username']."</td>
        <td>".$result['person_password']."</td>
        <td><a href='admin.php?name=".$result['person_fullname']."  ' class='btn'>Delete</a></td>
       
        </tr>
        ";
     }
}
?>


     </table>
    

    </body>
</html>
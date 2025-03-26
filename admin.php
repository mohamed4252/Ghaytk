<?php
session_start();
 include('../include/con.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container{
            height:390px;
            width:400px;
            margin:80px auto ;
            background-color: #fff;
            box-shadow: 0 0 1px rgba(0,0,0,0.1);
            border-radius: 3px;
        }
        h1{
            text-align: center;
            margin-bottom: 20px;

        }
        form{
            display: flex;
            flex-direction:column;
            align-items: center;
        }
        label{
            display: block;
            margin-bottom: 5px;

        }
        input[type="text"],[type="email"]{
            width:90%;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;


        }
        button{
            width: 90%;
            padding: 8px;
            background-color:#007bff;
            color:#fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
     <?php
        @$ademail=$_POST['email'];
        @$adpassword=$_POST['password'];
        @$adadd=$_POST['add'];

        if(isset($adadd)){
            if(empty(($ademail)||empty($adpassword))){
            echo'<script>alert("الرجاء ");</script>';
            }
        
            else{
                $query="SELECT *FROM admin WHERE EMAIL='$ademail' AND password='$$adpassword'";
                $result=mysqli_query($conn ,$query) ;
                if(mysqli_num_rows($result)==1){
                    $_SESSION['EMAIL']=$ademail;
                    header("REFRESH:2; URL=adminpanel.php");
                    

                }
            
                else{
                  header("REFRESH:2; URL=index.php");

              }
            }  
        }
        ?>

       <div class="container">
        <h1>تسجيل الدخول</h1>
        <form action="admin.php" method="post">
            <label for="email">البريد الالكتروني</label>
            <input type="email" name="email" id="email">
            <label for="password">الرقم السري</label>
            <input type="text" name="password" id="password">
            <br>
            <button type="submit" name="add">تسجيل الدخول </button>
             

        </form>

       </div> 
       
    </main>
</body>
</html>
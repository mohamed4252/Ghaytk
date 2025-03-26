<?php
$host="localhost";
$username="root";
$password="";
$dbname="ghaytk";
$conn =mysqli_connect($host,$username,$password,$dbname);
if(isset($conn)){
    echo" connexion réussie";
}
else{
    echo"Acune connexion";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>platform</title>
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <h1>G H A Y T K</h1>
            <div class="menu-container">
                <div class="menu-icon" onclick="toggleMenu()">☰</div>
            </div>
        
       
      <div id="side-menu" class="side-menu">
        <button class="close-btn" onclick="toggleMenu()">×</button>

        
        <div class="menu-header">
            <a href="admin.php" class="login-btn">تسجيل الدخول<i class="fa-solid fa-circle-user"></i></a>
                
        </div>  
        <br><br>
        <div class="avis">
        <p class="text">للإعلان تواصل معنا</p> 
        <span>42520486--38634664</span> <br><br>
                <div class="icons">
            <a href="" class="wtsp"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="" class="face"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="tik"><i class="fa-brands fa-tiktok"></i></a>
        </div> 
         </div>    
      
         
    
        <script>
            function toggleMenu() {
                let menu = document.getElementById("side-menu");
                menu.style.right = (menu.style.right === "0px") ? "-300px" : "0px";
            }
        </script>    
        
      
      
   
    </header>
    <nav>
        
      
       
        <div class="section">
        <ul type="none">
            <li><a href="index.HTML">الرئيسية</a></li>
            <li>
                <select>
                     <option value="default" disabled selected> السيارات</option>
                    <option value=""><a href="index.HTML">السيارات للبيع</a></option>
                    <option value=""><a href="index.HTML">السيارات للإيجار<a></option>
                </select> 
            </li>
            <li>
                <select>
                    <option value="default" disabled selected> عقارات</option>
                   <option value=""><a href="index.HTML">عقارات للبيع</a></option>
                   <option value=""><a href="index.HTML">عقارات للإيجار</a></option>
               </select> 
            </li>
           <li> <a href="index.HTML">خدمات عامة</a></li>
           <li><a href="">تكنولوجيا</a></li>
        
        </ul>
    </div>
   
    </nav>
    </body>
    </html>
<?php
session_start();
include('../include/con.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
   <?php
   if(isset($_SESSION["EMAIL"])){
       header('location:../index.php');
   } else {
   ?>
   <?php
  
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sectionad'])) {
       $sectionname = isset($_POST['sectionname']) ? trim($_POST['sectionname']) : '';

       if (empty($sectionname)) {
           echo '<script>alert("Veuillez remplir le champ");</script>';
       } else {
          $sectionname = mysqli_real_escape_string($conn, $sectionname);

           $query = "INSERT INTO section (sectionname) VALUES ('$sectionname')";
           $result = mysqli_query($conn, $query);

           if ($result) {
               echo '<script>alert("Done");</script>';
           } else {
               echo '<script>alert("Erreur: ' . mysqli_error($conn) . '");</script>';
           }
       }
   }
   ?>
    <div class="container">
         <div class="sect">
        <h1>لوحة تحكم الادارة</h1>
        
        <ul>
            <li><a href="../index.php" target="_blank" >الرئيسية<i class="fa-solid fa-house"></i></a></li>
            <li><a href="product.php" target="_blank" >صفحة إعلانات<i class="fa-solid fa-folder-open"></i></a></li>
            <li><a href="adproduct.php" target="_blank">إضافة إعلان<i class="fa-solid fa-folder-plus"></i></a></li>
            <li><a href="../index.php" target="_blank">تسجيل الخروج <i class="fa-solid fa-right-to-bracket"></i></a></li>
        </ul>
        </div>
        <div class="sec">
            <form action="adminpanel.php" method="post">
                <label for="section">إضافة قسم جديد</label>
                <input type="text" name="sectionname" id="section">
                <br>
                <button class="add" type="submit" name="sectionad">إضافة قسم</button>
                <br>
                <table dir="rtl">
                    <tr>
                        <th>الرقم التسلسلي</th>
                        <th>اسم القسم</th>
                        <th>حذف القسم</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM section";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['sectionname']; ?></td>
                        <td><a href=""><button type="button" class="delete">حذف القسم</button></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </form>
        </div>
    </div>
   <?php
   }
   ?>  
</body>
</html>
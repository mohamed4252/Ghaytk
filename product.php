<?php
session_start();
include('../include/con.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .update{
      color: white;
      font-size: 18px;
      background-color: rgb(55, 182, 48);
      padding: 8px 8px;
      border: 1px;
      margin-right: 5px;
      cursor: pointer;
}
    </style>
</head>
<body>
<div class="container">
       <table dir="rtl">
            <tr>
              <th>id</th>
                <th>النوع</th>
                <th>صور المنتج</th>
                <th>السعر</th>
                <th>التفاصيل</th>
                <th>الموقع</th>
                <th>القسم</th>
                <th>حذف المنتج</th>
                <th>تعديل المنتج</th>
            </tr>
            <?php
                    $query = "SELECT * FROM prod";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                  
                    ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><?php echo $row['imge'];?></td>
                <td><?php echo $row['prix'];?></td>
                <td><?php echo $row['detail'];?></td>
                <td><?php echo $row['location'];?></td>
                <td><?php echo $row['section'];?></td>
                <td><a href=""><button type="submit" class="delete">حذف المنتج</button></a></td>
                <td><a href=""><button type="submit" class="update">تعديل المنتج</button></a></td>
            </tr>
</div>
<?php
  }
  ?>
    
</body>
</html>
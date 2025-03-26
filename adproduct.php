<?php
session_start();
include('../include/con.php');

?>
<?php
  @$type=$_POST['type'];
  @$prix=$_POST['prix'];
  @$detail=$_POST['detail'];
  @$section=$_POST['section'];
  @$location=$_POST['location'];
  @$adprod=$_POST['adprod'];
  @$imge=$_FILES['imge']['name'];
  @$imgetmp=$_FILES['imge']['tmpname'];

  if(isset($adprod)){
    if(empty($type)||empty($prix)||empty($detail)||empty($section)||empty($location)||empty($imge)){
        echo '<script>alert("veuillez remplir tous les chmaps");</script>';
    }
    else{
        $imge=rand(0,10000);
        move_uploaded_file($imgetmp,"../uploads/imge//".$imge);

    }
    $query="INSERT INTO prod(type,imge,prix,detail,location,section) VALUES('$type','$imge','$prix','$detail','$location','$section')";
    $result=mysqli_query($conn,$query);
    if(isset($result)){
        echo '<script>alert("تمت اضافة");</script>';
    }
    else{
        echo '<script>alert("لم تمت اضافة");</script>';
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adproduct</title>
    <style>
    .form_prod{
    width: 60%;
    margin: 5px;
    box-shadow:0 5px 10px rgba(0,0,0, 1) ;
}
h1{
    padding: 10px;
}
label{
    display: block;
    margin-bottom:5px ;
    font-size: 25px;

}
input{
    width: 80%;
    padding: 12px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    box-sizing: 4px;

}
button{
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    background-color: #007bff;
    border: none;
    cursor: pointer;
    font-size: 28px;

}
button :hover{
    background-color: #11b63a;


}

    </style>
</head>
<body>
    <center>
    <main>
        <div class="form_prod">
            <h1> اضافة اعلان</h1>
            <form action="adproduct.php" method="post" enctype="multipart/form-data">

            <label for="name"> النوع</label>
            <input type="text" name="type" id="name">
            <label for="img"> صور المنتج</label>
            <input type="file" name="imge" id="img">
            <label for="prix">السعر</label>
            <input type="text" name="prix" id="prix">
            <label for="detail"> التفاصيل</label>
            <input type="text" name="detail" id="detail">
            <label for="location"> الموقع</label>
            <input type="text" name="location" id="location">

            <div>
            <label for="section">القسم</label>
             <select name="section" id="section">
                <?php
                    $query = "SELECT * FROM section";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
            
                      echo' <option name="section"> '.$row['$sectinname'].'</option>';
                    } 
                    ?>
                        <option value="">السيارات للبيع</option>
                        <option value="">السيارات للإيجار</option>
                       <option value="">عقارات للبيع</option>
                      <option value="">عقارات للإيجار</option>
                     <option value="">خدمات عامة</option>
                     <option value="">تكنولوجيا</option>
             
           
            
             </select>

            </div>
           
            
            <br><br>
            <button class="btn" type="submit" name="adprod">اضافة</button>


            </form>
    
        </div>
        </main>
    </center>
    
</body>
</html>
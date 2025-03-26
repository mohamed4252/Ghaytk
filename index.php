<?php
 include("file/header.php");
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .custom-btn {
            background-color: #007bff; 
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            margin-top: 20px;
     
        }

        .custom-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <br><br><br>

<div class="card" style="width: 18rem; margin: 20px;">
    <img src="" class="card-img-top" >
    <div class="card-body">
        <h5 class="card-title">منزل للإيجار</h5>
        <p class="card-text"> بسعر 100,000 أوقية قديمة شهريًا.</p>
        <a href="details.html" class="custom-btn">تفاصيل أكثر</a>
        
    </div>
</div>

</body>
</html>


<?php
 include("file/footer.php");
?>
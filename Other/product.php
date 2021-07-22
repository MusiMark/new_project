<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .box{
            border:2px solid grey;
            padding:20px;
            margin: 10px 400px 0px 400px;
        }
        .prtimg{
            background:blue;
            width:200px;
            height:200px;
        }
        .row{
            display:flex;
            justify-content:space-between;
        }
        .prtname{
            font-size:50px;
        }
    </style>
</head>
<body class="box">
<?php

include //connection code ;

$records = mysqli_query(/*$value*/,"select*from /*database*/");

while($data=mysqli_fetch_array($records)){
?>

    <div class="prtname">
        <p><?php /*echo $data['Name']*/?></p>
    </div>
    <div class="row">
        <div class="prtimg">
            <!--img space-->
        </div>
        <div>
            <div style="font-size:25px; font-weight:600;">
                <p>Price:Shs<?php /*echo $data['Price']*/?></p>
            </div>
            <div>
                <button>ADD TO CART</button>
            </div>
        </div>
    </div>
    <div>
        <div style="font-size:30px; font-weight:700;">
            <p>INFO:</p>
        </div>
        <div style="font-size:20px; font-weight:500;">
            <p><?php /*echo $data['Info']*/?></p>
        </div>
    </div>
<?php
   }
?>
</body>
</html>
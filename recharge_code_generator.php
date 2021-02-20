<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<style>
.outter {
 margin: auto;
  width: 30%;
  border: 2px solid green;
  padding: 10px;
  display: inline-block;
}

.inner {
  width: 300px;
  height: 100px;
  border: 2px solid black;
  display: inline-block;
  padding: 10px;
}

.center {
  text-align: center;
}

.text {
 font-size:14px;
}


</style>

    <?php
// for loop that generate the random recharge card codes
    for ($i = 0; $i <= 200; $i++) {?>
    <div class="outter">
        <div class="inner">
            <p class="center">
                <?php
                echo $serial = '<span class="text">'.'S/N:'. '&nbsp;&nbsp;'. mt_rand(1000000000000000, 9999999999999999).'</span>'.'<br>';
                echo 'PIN:'. '&nbsp;&nbsp;';
                $first_part = mt_rand(1000, 9999) . '-' . $second_part = mt_rand(1000, 9999) . '-' . $third_part = mt_rand(1000, 9999) . '-' . $fourth_part = mt_rand(10000, 99999);

                echo $recharge_card = '<b>'. $first_part. '</b><br>';

                echo $dail = '<span class="text">' . 'Dail *555* ' . $first_part . '</span>' . '<br>';

                echo $date = '<span class="text">'.'Date:'. '&nbsp;&nbsp;' . date('d/m/y  h:i:A') . '</span>';

                ?>

            </p>

        </div>
    
    </div>
        
    <?} ?>
</body>

</html>

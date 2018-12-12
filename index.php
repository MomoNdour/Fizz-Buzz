<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fizz Buzz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <?php
        for($i = 1; $i <= 100; $i++)
        {
            if($i % 3 == 0 && $i % 5 == 0)
            {
                echo "<p>".$i."   Fizz Buzz</p>";
            }
            elseif($i % 3 == 0)
            {
                echo "<p>".$i."   Fizz</p>";
            }
            elseif($i % 5 == 0){
                echo "<p>".$i."   Buzz</p>";
            }else{
                echo $i."   _____<br>";
            }
        }

    ?>
</body>
</html>
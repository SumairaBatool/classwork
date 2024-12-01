<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $voterage=65;
        if($voterage>=18 && $voterage<60){
            echo "user can vote";
        }
        elseif($voterage>=60){
            echo "age is greater then 60";
        }
        elseif($voterage<18 && $voterage>0){
            echo "stop the user from voting";
        }
        else{
            echo "invalid age";
        }
    ?>

</body>
</html>
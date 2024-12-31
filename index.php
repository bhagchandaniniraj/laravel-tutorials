<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <?php
        $a = array(1,2,3,4,[1,2,4,5,6],6,7,8,9,10,11);
        //$count = ;
        $i = 0; $j = 0;
        while ($i < count($a)){
            if(is_array($a[$i])){
                $cnt = count($a[$i]);
                print_r($a[$i]);
                while($j < $cnt){
                    echo "&nbsp;&nbsp; {$a[$i][$j]} <br/>";
                    $j++;
                }
                echo "<br/>";
            }else{
                echo "$a[$i]<br/>";
            }
            $i++;
        }
    ?>
</body>
</html>
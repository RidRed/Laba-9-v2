<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание JS</title>
</head>
<body>

    <form action = "#" method = "get">
        <input placeholder = "Напишите мерность" type = "text" name = "x">
        <button >Ввод</button>
    </form>

    <?php
        
        
        $row = $_GET["x"];
        $col = $row;
        $array = [];
        if($row != "")
        {
            for($i = 0; $i < $row; $i++)
            {
                $rand = rand(0,9);
                for($g = 0; $g < $col; $g++)
                {
                    $rand = rand(0,9);
                    $array[$i][$g] = $rand;
                    echo ($array[$i][$g]." ");
                
                }
                echo "<br>";
            }
            echo "<br>";
        
        for($i = 0; $i < $row; $i++)
        {
           for($g = $i + 1;$g < $row;$g++)
           {
            if($array[$i][$i] > $array[$g][$g])
           {
                $element = $array[$g][$g];
                $array[$g][$g] = $array[$i][$i];
                $array[$i][$i] = $element;
           }
           }
          
        }
        for($i = 0;$i < $row;$i++)
        {
            for($g = 0;$g < $row;$g++)
            {
                echo $array[$i][$g]." ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
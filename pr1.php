<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $p = 10;
        $p++;
        echo "<p>Ja imam $p Eura</p>";
        echo '<p>Ja imam $p Eura</p>';
        echo '<p>Ja imam' .$p. ' Eura</p>';
        for($i=0;$i<10;$i++){
            echo "<p>Master - $i</p>";
        }
    ?>
    <p>Bernard Vuković</p>
    <?php 
        for($i=0;$i<10;$i++){

        
    ?>
    <p>Pranjić - <?php echo $i ?></p>
    <?php 
    }

    var_dump($p);
    $p = $p + 0.1;
    var_dump($p);
    ?>
</body>

</html>
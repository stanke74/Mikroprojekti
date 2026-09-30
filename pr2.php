<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
        for($i=0;$i<5;$i++){
            ?>
        <tr>
            <td><?php echo $i + 1; ?></td>
            <td>Danijel</td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="pt-br">
        <title></title>
    </head>
    <body>
        <?php 
            $idade = 33;
            $peso = 93.4;

            if ($idade >= 16 && $idade <= 69 && $peso > 50) {
                echo 'pode doar sangue!';
            }
            else {
                'não pode doar sangue!';
            }
        ?>
    </body>
</html>
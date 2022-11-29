<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../www/css/style.css">
</head>
<body>
        <?php 
            for($int = 1; $int < 6; $int++){
                    require "../www/html/frame$int.html";
            }
         ?>
</body>
</html>
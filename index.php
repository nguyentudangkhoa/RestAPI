<?php
    require('auto-load.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $api = new API();
    //    / echo $api->getUserStmt().'<br>';
        $info = $api->ShowCStmt('nibba');
        echo $info
    ?>
    
</body>
</html>
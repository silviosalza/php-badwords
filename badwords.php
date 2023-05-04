<?php
$text = $_GET["text"];
$badword = $_GET["badword"];

$censoredText = str_replace($badword, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
       Testo: <?php echo $text ?>
    </p>

    <p>
        Lunghezza stringa: <?php echo strlen($text) ?> caratteri  
    </p>

    <h3>Testo censurato: <?php echo $censoredText ?>
    Lunghezza stringa: <?php echo strlen($censoredText) ?> caratteri</h3>
    
</body>
</html>
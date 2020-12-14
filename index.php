<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    // variabile
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sed quos suscipit, odit quia distinctio at accusantium corrupti nemo nesciunt sint dolores iste. Exercitationem velit facere, ex dignissimos id cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sed quos suscipit, odit quia distinctio at accusantium corrupti nemo nesciunt sint dolores iste. Exercitationem velit facere, ex dignissimos id cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sed quos suscipit, odit quia distinctio at accusantium corrupti nemo nesciunt sint dolores iste. Exercitationem velit facere, ex dignissimos id cupiditate';
    $length = strlen($text);
    $badwords = $_GET['badwords'];
    $change_word = str_replace($badwords, '***', $text);
    ?>
    
    <h1>Paragrafo</h1>
    <p><?php echo $text ?></p>

    <h1>Lunghezza paragrafo</h1>
    <p> <?php echo $length ?></p>

    <h1>Testo censurato</h1>
    <h2><?php echo $change_word ?></h2>
</body>
</html>
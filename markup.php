<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PatricNox Console</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="console">
            <?php if ($exec): ?>
                <?="<pre>".$exec."</pre>";?>
            <?php endif; ?>
            <form action="index.php" method="post">
               <?= $nav?> <tag>></tag> <input type="text" name="query" id="" placeholder="_">
             </form>
        </div>    
    </body>
</html>

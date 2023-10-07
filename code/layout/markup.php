<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PatricNox Console</title>
        <link rel="stylesheet" href="layout/style.css">
    </head>
    <body>
        <div id="console">
            <?php if ($output): ?>
                <?="<pre>$output</pre>";?>
            <?php endif; ?>
            <form action="index.php" method="post">
                <?php
                $history = array_reverse($_SESSION['history'] ?? []);
                ?>
                <input type="hidden" value="<?= htmlspecialchars(json_encode($history, JSON_FORCE_OBJECT)) ?>"
                       id="history">
               <?= $_SESSION['currentdir'] ?? $root ?>
               <span>></span><input type="text" name="query" id="cmd" autofocus placeholder="_" contenteditable="true"
                                    autocomplete="off" >
            </form>
        </div>
        <script src="layout/includes.js"></script>
    </body>
</html>

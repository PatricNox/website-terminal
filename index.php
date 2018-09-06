<?php

    session_start();
    $root = getcwd();
    $exec = NULL;
    if ($_POST['query'] == "dev")
        unset($_SESSION['currentdir']);

    if (isset($_POST['query']))
    {
        include_once('commands/utility.php');
        if (isset($_SESSION['currentdir']))
        {
            chdir($_SESSION['currentdir']);
            $exec = shell_exec($_POST['query']);
        }

        else
            $exec = shell_exec($_POST['query']);

        chdir($root);
    }

    ## Generate markup & style
    include_once('./markup.php');

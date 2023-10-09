<?php

/**
 * This is the core file, it takes care of initializers and is 
 * the overall project handler. 
 *
 * @author PatricNox <hello@PatricNox.info>
 */

    session_start();
    $root = getcwd();
    $exec = NULL;

    if (isset($_POST['query']) && $_POST['query'] == 'dev')
        unset($_SESSION['currentdir']);

    if (isset($_POST['query']))
    {
        include_once('commands/utility.php');
        if (isset($_SESSION['currentdir']))
            chdir($_SESSION['currentdir']);

        // Execute command, log it and move to root
        terminal_input($_POST['query'], $root);
    }

    ## Generate markup & style
    $output = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'logs.txt');
    include(__DIR__.'/layout/markup.php');

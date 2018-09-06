<?php

/**
 * This is the core file for the project, for now.
 * Using mixed commands, dir and ls, but targeted to linux users.
 * This too is something to be changed, see everything as WIP and attempts
 *  before any cleanup
 * 
 * @author PatricNox <eronoxsmail@gmail.com>
 */

    session_start();
    $root = getcwd();
    $exec = NULL;

    if (isset($_POST['query']))
    {
        include_once('commands/utility.php');
        if (isset($_SESSION['currentdir']))
        {
            chdir($_SESSION['currentdir']);
            $exec = shell_exec($_POST['query']);
        }

        else // This is if a new-sessioned user haven't moved path
            $exec = shell_exec($_POST['query']);

        chdir($root);
    }

    ## Generate markup & style
    include_once('./layout/markup.php');

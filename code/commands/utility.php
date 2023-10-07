<?php

/**
 * The utility file contains extra code for
 * specific commands to work as intended.
 * 
 * @author PatricNox <hello@PatricNox.info>
 */

$query = htmlspecialchars($_POST['query']);
$query = strip_tags($query); // Eliminate PHP/HTML tags

## Logging system
include 'commands/log.php';

## Session System
if (isset($_SESSION['LAST_ACTIVITY']) && ((time() - $_SESSION['LAST_ACTIVITY']) > 480)) 
{   // Reset session if inactive
    // request 8 minUtes ago
    session_destroy();
    session_unset();
    header("Refresh:0"); // Refresh page to get correct listing
}
$_SESSION['LAST_ACTIVITY'] = time(); // Update last activity

## Navigation system (cd)
if (strpos($query, "cd") !== false)
{
   // remove "cd" part from command
   $query = str_replace("cd", '', $query);

   // Enter & Save new path in session
   if (isset($_SESSION['currentdir']))
        chdir($_SESSION['currentdir']);

   chdir(trim($query));
   $_SESSION['currentdir'] = $nav = getcwd();
}

## Clear windows command
if ((strpos($query, "cls") !== false) || (strpos($query, "clear") !== false))
    terminal_clear(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR.'logs.txt');

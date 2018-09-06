<?php

$query = htmlspecialchars($_POST['query']);
$query = strip_tags($query); // Eliminate PHP/HTML tags

## Navigation system (cd)
if (strpos($query, "cd") !== false)
{
   // User entered cd into terminal
   $query = trim($query);

   // remove "cd" part from command
   $query = str_replace("cd", '', $query);
   $query = $query.'/'; // Add ending trailing slash

   // Enter & Save new path in session
   chdir($query);
   $_SESSION['currentdir'] = $nav = getcwd();

echo "<font color='red'>".$query.'</font>';
}

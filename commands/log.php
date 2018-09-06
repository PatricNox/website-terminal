<?php 

    /**
     * This file handles the logging of commands and outputs.
     * Stored in a txt file behaved to be the historical.
     * 
     * @author PatricNox <eronoxsmail@gmail.com>
     */

    // What path as appendix to use
    if (isset($_SESSION['currentdir']))
        $path = $_SESSION['currentdir'];
    else
        $path = $root;

    file_put_contents('logs.txt', $path.'> '.$query."\n", 8);
    
    function terminal_input(String $inputquery, String $rootPath): void
    {
         /**
         * Runs the query through shell_exec 
         * and saves the output into the logs.
         * 
         * @param String $inputquery
         * @param String $rootPath
         * @return Void
         */

         // Dont run empty inputs
         if (strlen($inputquery ) < 2)
            return;

        // Execute command
        $exec = shell_exec($inputquery.' 2>&1');

        // Go back to root & save output
        chdir($rootPath);
        file_put_contents('logs.txt', $exec."\n", 8);
        return;
    }

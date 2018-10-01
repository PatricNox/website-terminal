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

    // Clear log if it's overwhelmed
    $log = file_get_contents('./logs.txt');
    if (strlen($log) > 350)
        terminal_clear();

    // Add current command execute into history log
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

        add_to_history($inputquery);

        // Execute command
        $exec = shell_exec($inputquery.' 2>&1');

        // Go back to root & save output
        chdir($rootPath);
        file_put_contents('logs.txt', $exec."\n", 8);

        // Clear log when `clear` is called
        if ($inputquery === 'clear')
            terminal_clear();

        return;
    }

    function add_to_history(String $inputquery): void
    {
        if (!$_SESSION['history']) {
            // Make it array if it does not exists.
            $_SESSION['history'] = [];
        } elseif (is_array($_SESSION['history']) && end($_SESSION['history']) === $inputquery) {
            // Don't store the same query twice after each other.
            return;
        }

        $_SESSION['history'][] = $inputquery;
        return;
    }

    function terminal_clear(): bool
    {
        if (unlink('logs.txt'))
            if (file_put_contents('logs.txt',"\n", 8))
                return true;
        return false;
    }

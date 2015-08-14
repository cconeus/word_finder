<?php


    class RepeatCounter
    {

        function countRepeats($usr_word, $usr_string)
        {

            $usr_word = strtoupper($_GET['word_search']);
            $usr_string = strtoupper($_GET['usr_string']);

            $output = substr_count($usr_string, $usr_word);

            return $output;
        }
    }
 ?>

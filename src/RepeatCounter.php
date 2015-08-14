<?php


    class RepeatCounter
    {

        function countRepeats($usr_string, $usr_word)
        {

            $usr_word = $_GET['word_search'];
            $usr_string = $_GET['usr_string'];

            $output = substr_count($usr_string, $usr_word);

            return $output;
        }
    }
 ?>

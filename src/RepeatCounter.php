<?php


    class RepeatCounter
    {

        function countRepeats()
        {

            $usr_word = $_POST['word_search'];
            $usr_string = $_POST['usr_string'];

            $output = substr_count(strtolower($usr_string), strtolower($usr_word));

            return $output;
        }

        function displayWord()
        {

            $usr_word = $_POST['word_search'];
            $usr_string = $_POST['usr_string'];

            return $usr_word;
            return $usr_string;
        }
    }
 ?>

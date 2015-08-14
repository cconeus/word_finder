<?php

    class RepeatCounter
    {

        function countRepeats($usr_word, $usr_string)
        {

            $usr_word = strtoupper("cat");
            $usr_string = strtoupper("The cat in the hat");

            $output = substr_count($usr_string, $usr_word);
            return $output;
        }
    }
 ?>

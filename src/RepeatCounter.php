<?php

    class RepeatCounter
    {
        function countRepeats($usr_search, $usr_input)
        {
            $usr_search = "cat";
            $usr_input = "The cat in the hat";
            return substr_count($usr_input, $usr_search);

        }
    }
 ?>

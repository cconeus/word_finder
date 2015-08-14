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

 //possible future additions would include breaking the strings into individual words, so that I could exclude word searches for things like 'an' from including every word which contains the letters 'an'. Also need to complete the blockquote display still, to show the original text for comparison on the results page. Of course, some prettying-up is in order as well, to make the page a bit better looking and less rugged.

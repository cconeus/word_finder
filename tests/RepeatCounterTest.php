<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats()
        {

            $test_RepeatCounter = new RepeatCounter;
            $input = "The CAT in the hat";
            $search_word = "CAT";

            $result = $test_RepeatCounter->countRepeats($input, $search_word);

            $this->assertEquals(1, $result);
        }

        function test_displayWord_uppercaseAll()
        {

// for some reason strtoupper doesnt seem to want to work, either in this test or in the actual code. I've tried strtoupper, strtolower, mb_strtoupper, using explode and implode to break the string apart and upper/lowercase it, it still will not find a match. If I create the explode/implode method over on the RepeatCounter.php file, it will pass this test, but then fail the first test of attempting to find a match of 1 for CAT. This tells me that it IS converting it to uppercase, as this second test passes, however for some reason I cant figure out, will cause test 1 to no longer find a match. Running short on time at this point, so I'm going to begin making my Silex app to build the project. -- additional edit, just simply created a different method within my class to perform this separate function. Would LOVE to know how to do this all within one method however.

            $test_RepeatCounter = new RepeatCounter;
            $search_string = strtoupper("The cat in the hat");
            $input = strtoupper("cAt");

            $result = $test_RepeatCounter->countRepeats($search_string, $input);


            $this->assertEquals("CAT", $result);
        }

    }
 ?>

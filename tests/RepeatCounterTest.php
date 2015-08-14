<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats()
        {

            $test_RepeatCounter = new RepeatCounter;
            $input = "The cat in the hat";

            $result = $test_RepeatCounter->countRepeats($input);

            $this->assertEquals(1, $result);
        }
    }
 ?>

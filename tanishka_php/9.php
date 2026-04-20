<?php

    class greeting
    {
        public $str = "Hello World!";
        function show_greeting()
        {
            return $this->str;
        }
    }
     
    $message = new greeting;
    var_dump($message);
    echo "<br>This program is written and executed by Tanishka Jain";

?>
<?php

    $arr = array("n"=>1,"a"=>2,"b"=>3,"c"=>4);
    arsort($arr);
    print_r($arr);

    function eve($ele)
    {
        if($ele%2 === 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    $ev = 'eve';

    $evens = array_filter($arr,$ev);

    print_r($evens);

    print_r(array_chunk($arr,2));

?>
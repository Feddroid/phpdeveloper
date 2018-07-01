<?php

    function build($str){
        echo "<strong>entrada</strong> : ".json_encode($str);

        $arr = array();
        foreach (range($str[0],$str[count($str)-1]) as $number){
            $arr[] .= $number;
        }

        $str = array_values($arr);

        return json_encode($str, JSON_NUMERIC_CHECK);
    }

    echo " <strong>salida</strong> : ".build([55,58,63,75]);

?>
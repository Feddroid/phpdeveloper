<?php

    function build($str){
        echo "<strong>entrada</strong> : ".$str;

        return str_repeat("()",substr_count($str, "()"));
    }

    echo " <strong>salida</strong> : ".build("( ()()()()(()))))())((() )");

?>
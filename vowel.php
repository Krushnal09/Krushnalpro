<?php
if(isset($_POST['Submit']))
{
    $str = strolower($_POST['str']);
    $len = strlen($str);
    $num = 0;
    FOR($I=0; $i<$len; $i++){
        if(in_array($str[$i], $vowels))
        {
            $num++;
        }
    }
    echo "Number of vowels;- .$num";
}
?>
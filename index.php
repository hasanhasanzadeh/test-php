<?php
//require 'debug.php';
function printArray($array){
    echo '[';
    foreach ($array as $key=>$item){
        echo $item;
        if ($key!=array_key_last($array)){
            echo ',';
        }

    }
    echo ']<br>';
}

$list=[5,1,0,4,-1,23,45,11];

printArray($list);

        for ($j=count($list)-1;$j>0;$j--)
        {
            for ($i=0;$i<$j;$i++){
                if ($list[$i]<$list[$i+1]){
                    $list[$i]+=$list[$i+1];
                    $list[$i+1]=$list[$i]-$list[$i+1];
                    $list[$i]-=$list[$i+1];
                }
            }
        }

printArray($list);
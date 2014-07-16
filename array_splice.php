<?php

function splice( &$input, $offset, $length = 0, $replacement = NULL ) { 
    $i = 0;
    $input = (array) $input;
    $count = count($input);
    end($input);
    $lastKey = key($input);
    $result = array();
    $delete = array();
    $offset = $offset < 0 ? (count($input)) + $offset : $offset;
    if($offset>$count){
        $offset = $count;
    }   
    $length = $length < 0 ? (count($input) + $length) - $offset : $length;
    if($length < 0)  
        $length = 0;
    if($length + $offset > $count) {
        $length = $count - $offset;
    }   
    $flag = false;

    reset($input);
    for($i=0; $i<$offset; $i++,next($input)){
        $result[] = current($input);
    }   
    for($i=$length;$i>0;$i--,next($input)){
        $delete[] = current($input);
    }   
    foreach($replacement as $value){
        $result[] = $value;
    }   
    for($c = count($input),$i=$offset+$length;$i<$c;$i++,next($input)){
        $result[] = current($input);
    }   

    $input = $result;
    return $delete;
}

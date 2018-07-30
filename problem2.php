<?php
    header('Content-Type: application/json');
    $parsed = json_decode(file_get_contents( 'php://input' ), TRUE);
    $cells = (array)$parsed['cells'] ?: array();
    $dist = $parsed['distance'] ?: 1;
    $answer = array('result' => 0);
    for($i = 0; $i < count($cells) - 1; $i++){
        $gap = $cells[$i+1]-$cells[$i];
        if($gap <= $dist)
            continue;
        else if($answer['result']==0)
            $answer['result']++;
        if($gap != $dist*2)
            $answer['result']*= intval($gap/$dist);
    }
    if(json_last_error())
        echo json_last_error_msg();
    else
        echo json_encode($answer);
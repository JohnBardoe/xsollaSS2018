<?php
class SocksMachine{
    public static function countUnpaired(array $socks){
            $count = array_count_values($socks);
            $unpaired = 0;
            foreach ($count as $c)
                if($c%2==1)
                    $unpaired++;
            return $unpaired;
    }
}

$arr = array(1,2,3,4,4);
try {
    echo SocksMachine::countUnpaired($arr);
} catch(TypeError $error){
    echo 'Type missmatch.';
}
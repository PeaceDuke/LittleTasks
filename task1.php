<?php

class SocksMachine
{
    public function countUnparied(array $socks)
    {
        #проходимся по всем носкам и считаем сколько каждого цвета
        $socks = array_count_values($socks);
        $count = 0;
        #проверяем сколько носков без пары
        foreach($socks as $value){
            if($value % 2 == 1){
                $count++;
            }
        }
        return $count;
    }
}

?>

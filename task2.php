<?php

class CarrotPlanter
{
    #функция считающая колличество ячеек для посадки
    public function CountCells(array $data)
    {
        #массив с ячейками
        $cells = $data["cells"];
        #минимальная дистанция до ячейки
        $dist = $data["distance"];
        $count = 0;
        $size = count($cells);
        for ($i = 0; $i < $size - 1; $i++)
        {
            $t = $cells[i + 1] - $cells[i] / ($dist * 2);
            #если растояние между ячейками больше двойной дистнции, тогда можно садить больше чем одну морковку
            #если растояние меньше, то ни одной
            #если оно равно, то только одну
            $localcount = $t < 1 ? 0 : ceiling(t);
            $count += $localcount;
        }
        return $result;
    }
}

$jsonStr = file_get_contents("php://input");
$data = (array)json_decode($jsonStr);
$result = array("result" => CarrotPlanter::CountCells($data));
$out = json_encode($result);
echo $data_string;

?>

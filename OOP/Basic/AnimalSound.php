<?php

class AnimalsSound{
    public function selectAnimal($param)
    {
        switch($param)
        {
            case 1:
                return 'o gato mia';
            case 2:
                return 'o cachorro late';
            case 3:
                return 'a galinha cacareja';
            case 4:
                return 'a vaca munji';
            default:
                return 'Animal Desconhecido';
        }
    }
}
$teste = new AnimalsSound();
$check = $teste->selectAnimal(1);
echo $check;
// está da
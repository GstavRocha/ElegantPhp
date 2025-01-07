<?php

class AnimalsSound{
    public $choose;
    public function _construct($yourChoose)
    {
        $this->choose = $yourChoose;
    }
    public fuction animal()
    {
        switch($this->choose)
        {
            case 1:
            return 'The Cat Sound!'
        }
    }
}
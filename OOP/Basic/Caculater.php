<?php
class Calculator{
    public $num1;
    public $num2;
    public function __construct($param1=null, $param2=null)
    {
        $this->num1= $param1;
        $this->num2=$param2;
    }
    public function soma()
    {
        return $this->num1+$this->num2;
    }
    public function subtrair()
    {
        return $this->num1-$this->num2;
    }
    public function multiplicar()
    {
        return $this->num1*$this->num2;
    }
    public function divider(){
        return $this->num2/$this->num1;
    }

}
$teste = new Calculator(3,2);
$number1 = $teste->soma();
$number2 = $teste->soma();
$result = $number2*$number1;
echo $result;


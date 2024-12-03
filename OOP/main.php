 <!-- ls * .php | entr -r php main.php  for reload php-->
<?php 
include './Basic/People.php';
include './Basic/Retangle.php';
include './Basic/Discount.php';

$exemplo = new People("Gustavo",15);
$exemplo2 = new Retangle(4,4);
echo '---------- question 1 -----'.PHP_EOL;
echo $exemplo->getName();
echo $exemplo->setName("Lucky").PHP_EOL;
echo $exemplo->getName().PHP_EOL;
echo $exemplo->setAge(15);
echo $exemplo->getAge().PHP_EOL;
echo $exemplo2->getAltura().PHP_EOL;
echo $exemplo2->getLargura().PHP_EOL;
echo $exemplo2->calculaArea(4,4).PHP_EOL;
echo '------------'

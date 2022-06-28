<?php

final class  Complex
{

    public function __construct(
        private float $realNumber,
        private float $falseNumber)
    {
    }

    public function plus(Complex $add): Complex
    {

        $newReal = $this->realNumber + $add->realNumber;
        $newFalse = $this->falseNumber + $add->falseNumber;
        return new Complex($newReal, $newFalse);

    }

    public function minus(Complex $diff): Complex
    {
        $newReal = $this->realNumber - $diff->realNumber;
        $newFalse = $this->falseNumber - $diff->falseNumber;
        return new Complex($newReal, $newFalse);

    }

    public function divide(Complex $div): Complex
    {

        $d = $div->realNumber * $div->realNumber + $div->falseNumber * $div->falseNumber;
        $newReal = (($this->realNumber * $div->realNumber) + $this->falseNumber * $div->falseNumber) / $d;
        $newFalse = ($this->falseNumber * $div->realNumber - $this->realNumber * $div->falseNumber) / $d;
        return new Complex($newReal, $newFalse);

    }

    public function multiply(Complex $mult): Complex
    {

        $newReal = ($this->realNumber * $mult->realNumber) - $this->falseNumber * $mult->falseNumber;
        $newFalse = $this->falseNumber * $mult->realNumber + $this->realNumber * $mult->falseNumber;
        return new Complex($newReal, $newFalse);
    }


    public function __toString(): string
    {
        return $this->realNumber . '+' . $this->falseNumber . 'i';
    }

    public function getFalseNumber(): float
    {
        return $this->falseNumber;
    }


    public function getRealNumber(): float
    {
        return $this->realNumber;
    }

    public function toJson(): string
    {

        return '{"complex":"' . $this->realNumber . '+' . $this->falseNumber . 'i' . '"}';
    }
}


?>

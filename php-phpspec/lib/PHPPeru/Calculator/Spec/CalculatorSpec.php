<?php

namespace PHPPeru\Calculator;

use PHPPeru\Calculator\Calculator;

class DescribeCalculator extends \PHPSpec\Context
{

    protected $calculator;
    protected $input;

    public function before()
    {
        $this->calculator = $this->spec(new Calculator());
    }

    public function itShouldBeZero()
    {
        $this->calculator = new Calculator();
        $this->input = '';
        $this->calculator->Add($this->input)->be(0);
    }

}

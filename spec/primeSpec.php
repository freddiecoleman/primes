<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class primeSpec extends ObjectBehavior
{
    public function it_returns_an_empty_array_for_1()
    {
        $this->generate(1)->shouldReturn([]);
    }

    public function it_returns_2_for_2()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    public function it_returns_3_for_3()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    public function it_returns_2_4_for_4()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    public function it_returns_5_for_5()
    {
        $this->generate(5)->shouldReturn([5]);
    }

    public function it_returns_2_3_for_6()
    {
        $this->generate(6)->shouldReturn([2, 3]);
    }

    public function it_returns_2_2_2_for_8()
    {
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }

    public function it_returns_3_3_for_9()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }
}

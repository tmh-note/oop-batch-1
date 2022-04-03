<?php

trait Mother
{
    public $name = 'Hla Hla';

    public function rich()
    {
        return 'Rich';
    }

    public function beauty()
    {
        return 'Beauty';
    }
}

class Son
{
    use Mother;
}

$son = new Son;
echo $son->name;
echo $son->rich();
echo $son->beauty();
<?php
class Option
{
    private $fee;

    public function __construct()
    {
        $this->fee = 0;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param mixed $fee
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    }
}

$opt = new Option();
$opt->setFee(100);

file_put_contents(__DIR__.'/../serialized.data', serialize($opt));

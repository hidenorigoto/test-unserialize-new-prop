<?php
class Option
{
    private $fee;
    private $hideZeroImpressionCampaign = false;

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

    /**
     * @return boolean
     */
    public function isHideZeroImpressionCampaign()
    {
        return $this->hideZeroImpressionCampaign;
    }

    /**
     * @param boolean $hideZeroImpressionCampaign
     */
    public function setHideZeroImpressionCampaign($hideZeroImpressionCampaign)
    {
        $this->hideZeroImpressionCampaign = $hideZeroImpressionCampaign;
    }
}

$opt = unserialize(file_get_contents(__DIR__.'/../serialized.data'));

var_dump($opt);

<?php

namespace Spomky\FreeradiusBundle\Model;
use SpomkyFreeradiusBundle\Model\NasInterface;

interface NasManagerInterface
{
    public function getSumBandwidth(NasInterface $Nas, \Datetime $date_start, \Datetime $date_end);
    public function getBandwidth(NasInterface $Nas, \Datetime $date_start, \Datetime $date_end);
}

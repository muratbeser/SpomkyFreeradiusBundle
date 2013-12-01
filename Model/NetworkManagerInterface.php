<?php

namespace Spomky\FreeradiusBundle\Model;
use Spomky\FreeradiusBundle\Model\NetworkInterface;

interface NetworkManagerInterface
{
    public function getSumBandwidth(NetworkInterface $network, \Datetime $date_start, \Datetime $date_end);
    public function getBandwidth(NetworkInterface $network, \Datetime $date_start, \Datetime $date_end);
}

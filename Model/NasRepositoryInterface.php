<?php

namespace Spomky\FreeradiusBundle\Model;

use Spomky\FreeradiusBundle\Model\NasInterface;

interface NasRepositoryInterface
{
    public function getSumBandwidth(NasInterface $nas, \Datetime $date_start, \Datetime $date_end);
    public function getBandwidth(NasInterface $nas, \Datetime $date_start, \Datetime $date_end);
}

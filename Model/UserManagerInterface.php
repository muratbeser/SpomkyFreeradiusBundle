<?php

namespace Spomky\FreeradiusBundle\Model;
use Spomky\FreeradiusBundle\Model\UserInterface;

interface UserManagerInterface
{
    public function getSumBandwidth(UserInterface $User, \Datetime $date_start, \Datetime $date_end);
    public function getBandwidth(UserInterface $User, \Datetime $date_start, \Datetime $date_end);
}

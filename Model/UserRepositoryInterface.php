<?php

namespace Spomky\FreeradiusBundle\Model;

use SpomkyFreeradiusBundle\Model\UserInterface;

interface UserRepositoryInterface
{
    public function getSumBandwidth(UserInterface $user, \Datetime $date_start, \Datetime $date_end);
    public function getBandwidth(UserInterface $user, \Datetime $date_start, \Datetime $date_end);

    public function getSumSessionDuration(UserInterface $user, \Datetime $date_start, \Datetime $date_end);
    public function getSessionDuration(UserInterface $user, \Datetime $date_start, \Datetime $date_end);
}

<?php

namespace Spomky\FreeradiusBundle\Model;

interface NetworkInterface
{
    public function getName();
    public function getNass();
    public function getUsers();
}

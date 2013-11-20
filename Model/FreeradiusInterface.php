<?php

namespace Spomky\FreeradiusBundle\Model;

interface RoleInterface
{
    public function getAttribute();
    public function getOp();
    public function getValue();
}

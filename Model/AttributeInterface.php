<?php

namespace Spomky\FreeradiusBundle\Model;

interface AttributeInterface
{
    public function getName();
    public function getOp();
    public function getValue();
}

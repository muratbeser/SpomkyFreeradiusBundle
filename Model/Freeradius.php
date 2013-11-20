<?php

namespace Spomky\FreeradiusBundle\Model;

class Freeradius implements FreeradiusInterface
{
    protected $attribute;
    protected $op;
    protected $value;
    
    public function getAttribute() {
        return $this->attribute;
    }
    
    public function getOp() {
        return $this->op;
    }
    
    public function getValue() {
        return $this->value;
    }
}

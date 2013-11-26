<?php

namespace Spomky\FreeradiusBundle\Model;

class Attribute implements AttributeInterface
{
    protected $name;
    protected $op;
    protected $value;
    
    public function getName() {
        return $this->name;
    }
    
    public function getOp() {
        return $this->op;
    }
    
    public function getValue() {
        return $this->value;
    }
}

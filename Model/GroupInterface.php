<?php

namespace Spomky\FreeradiusBundle\Model;

interface GroupInterface
{
    public function getName();
    public function getUsers();
    public function getReplies();
    public function getChecks();
}

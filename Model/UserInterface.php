<?php

namespace Spomky\FreeradiusBundle\Model;

interface UserInterface
{
    public function getName();
    public function getGroups();
    public function getReplies();
    public function getChecks();
    public function getAccountings();
}

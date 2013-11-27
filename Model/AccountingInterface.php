<?php

namespace Spomky\FreeradiusBundle\Model;

interface AccountingInterface
{
    public function getUser();

    public function getSessionId();

    public function getUniqueId();

    public function getNas();
    public function getNasIpAddress();
    public function getNasPortId();
    public function getNasPortType();

    public function getStartTime();
    public function getStopTime();

    public function getAuthentic();

    public function getConnectInfoStart();
    public function getConnectInfoStop();

    public function getCallingStationId();

    public function getTerminateCause();

    public function getServiceType();

    public function getFramedProtocol();
    public function getFramedIpAddress();

    public function getStartDelay();
    public function getStopDelay();

    public function getInputOctets();
    public function getOutputOctets();
}

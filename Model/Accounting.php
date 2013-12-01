<?php

namespace Spomky\FreeradiusBundle\Model;

use Spomky\FreeradiusBundle\Model\AccountingInterface;

class Accounting implements AccountingInterface
{
    protected $session_id;
    protected $acctuniqueid;

    protected $user;

    protected $nas;
    protected $nasipaddress;
    protected $nasportid;
    protected $nasporttype;

    protected $acctstarttime;
    protected $acctstoptime;
    protected $acctauthentic;

    protected $connectinfo_start;
    protected $connectinfo_stop;

    protected $acctinputoctets;
    protected $acctoutputoctets;

    protected $callingstationid;

    protected $acctterminatecause;

    protected $servicetype;

    protected $framedprotocol;
    protected $framedipaddress;

    protected $acctstartdelay;
    protected $acctstopdelay;

    public function getSessionId()
    {
        return $this->session_id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getUniqueId()
    {
        return $this->acctuniqueid;
    }

    public function getNas()
    {
        return $this->nas;
    }

    public function getNasIpAddress()
    {
        return $this->nasipaddress;
    }

    public function getNasPortId()
    {
        return $this->nasportid;
    }

    public function getNasPortType()
    {
        return $this->nasporttype;
    }

    public function getStartTime()
    {
        return $this->acctstarttime;
    }

    public function getStopTime()
    {
        return $this->acctstoptime;
    }

    public function getAuthentic()
    {
        return $this->acctauthentic;
    }

    public function getConnectInfoStart()
    {
        return $this->connectinfo_start;
    }

    public function getConnectInfoStop()
    {
        return $this->connectinfo_stop;
    }

    public function getCallingStationId()
    {
        return $this->callingstationid;
    }

    public function getTerminateCause()
    {
        return $this->acctterminatecause;
    }

    public function getServiceType()
    {
        return $this->servicetype;
    }

    public function getFramedProtocol()
    {
        return $this->framedprotocol;
    }

    public function getFramedIpAddress()
    {
        return $this->framedipaddress;
    }

    public function getStartDelay()
    {
        return $this->acctstartdelay;
    }

    public function getStopDelay()
    {
        return $this->acctstopdelay;
    }

    public function getInputOctets()
    {
        return $this->acctinputoctets;
    }

    public function getOutputOctets()
    {
        return $this->acctoutputoctets;
    }
}

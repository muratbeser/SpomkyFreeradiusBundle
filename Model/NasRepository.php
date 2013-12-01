<?php

namespace Spomky\FreeradiusBundle\Model;

use Doctrine\ORM\EntityRepository;

use Spomky\FreeradiusBundle\Model\NasInterface;

class NasRepository extends EntityRepository implements NasRepositoryInterface
{
    public function getSumBandwidth(NasInterface $nas, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->createQueryBuilder('a')
        ->select("SUM(a.acctinputoctets) AS input, SUM(a.acctoutputoctets) AS output")
        ->innerJoin('a.nas', 'd')
        ->where('d.id = :id')
        ->andWhere('a.acctstarttime >= :date_start')
        ->andWhere('a.acctstarttime < :date_end')
        ->setParameter('date_start', $date_start)
        ->setParameter('date_end', $date_end)
        ->setParameter('id', $nas)
        ->getQuery()
        ->execute();
    }
    public function getBandwidth(NasInterface $nas, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->createQueryBuilder('a')
        ->select("YEAR(a.acctstarttime) AS year, MONTH(a.acctstarttime) AS month, DAY(a.acctstarttime) AS day, a.acctstarttime AS date, SUM(a.acctinputoctets) AS input, SUM(a.acctoutputoctets) AS output")
        ->innerJoin('a.nas', 'd')
        ->where('d.id = :id')
        ->groupBy("year")
        ->addGroupBy("month")
        ->addGroupBy("day")
        ->andWhere('a.acctstarttime >= :date_start')
        ->andWhere('a.acctstarttime < :date_end')
        ->setParameter('date_start', $date_start)
        ->setParameter('date_end', $date_end)
        ->setParameter('id', $nas)
        ->getQuery()
        ->execute();
    }
}

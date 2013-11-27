<?php

namespace Spomky\FreeradiusBundle\Model;

use Doctrine\ORM\EntityRepository;

use SpomkyFreeradiusBundle\Model\UserInterface;

class UserRepository extends EntityRepository implements UserRepositoryInterface
{
    public function getSumBandwidth(UserInterface $user, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->createQueryBuilder('a')
        ->select("SUM(a.acctinputoctets) AS input, SUM(a.acctoutputoctets) AS output")
        ->innerJoin('a.user', 'u')
        ->where('u.id = :id')
        ->andWhere('a.acctstarttime >= :date_start')
        ->andWhere('a.acctstarttime < :date_end')
        ->setParameter('date_start', $date_start)
        ->setParameter('date_end', $date_end->modify("+1 day"))
        ->setParameter('id', $user)
        ->getQuery()
        ->execute();
    }
    public function getBandwidth(UserInterface $user, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->createQueryBuilder('a')
        ->select("YEAR(a.acctstarttime) AS year, MONTH(a.acctstarttime) AS month, DAY(a.acctstarttime) AS day, a.acctstarttime AS date, SUM(a.acctinputoctets) AS input, SUM(a.acctoutputoctets) AS output")
        ->innerJoin('a.user', 'u')
        ->where('u.id = :id')
        ->groupBy("year")
        ->addGroupBy("month")
        ->addGroupBy("day")
        ->andWhere('a.acctstarttime >= :date_start')
        ->andWhere('a.acctstarttime < :date_end')
        ->setParameter('date_start', $date_start)
        ->setParameter('date_end', $date_end->modify("+1 day"))
        ->setParameter('id', $user)
        ->getQuery()
        ->execute();
    }
}

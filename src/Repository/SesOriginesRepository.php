<?php

namespace App\Repository;

use App\Entity\SesOrigines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SesOrigines|null find($id, $lockMode = null, $lockVersion = null)
 * @method SesOrigines|null findOneBy(array $criteria, array $orderBy = null)
 * @method SesOrigines[]    findAll()
 * @method SesOrigines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SesOriginesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SesOrigines::class);
    }

    // /**
    //  * @return SesOrigines[] Returns an array of SesOrigines objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SesOrigines
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

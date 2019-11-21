<?php

namespace App\Repository;

use App\Entity\Reglage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Reglage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reglage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reglage[]    findAll()
 * @method Reglage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReglageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reglage::class);
    }

    // /**
    //  * @return Reglage[] Returns an array of Reglage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reglage
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

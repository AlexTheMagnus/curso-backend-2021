<?php

namespace App\Repository;

use App\Entity\Trail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Trail|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trail|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trail[]    findAll()
 * @method Trail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trail::class);
    }

    // /**
    //  * @return Trail[] Returns an array of Trail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Trail
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

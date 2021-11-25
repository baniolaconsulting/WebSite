<?php

namespace App\Repository;

use App\Entity\Privilleges;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Privilleges|null find($id, $lockMode = null, $lockVersion = null)
 * @method Privilleges|null findOneBy(array $criteria, array $orderBy = null)
 * @method Privilleges[]    findAll()
 * @method Privilleges[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrivillegesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Privilleges::class);
    }

    // /**
    //  * @return Privilleges[] Returns an array of Privilleges objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Privilleges
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

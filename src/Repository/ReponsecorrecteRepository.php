<?php

namespace App\Repository;

use App\Entity\Reponsecorrecte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reponsecorrecte|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reponsecorrecte|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reponsecorrecte[]    findAll()
 * @method Reponsecorrecte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReponsecorrecteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reponsecorrecte::class);
    }

    // /**
    //  * @return Reponsecorrecte[] Returns an array of Reponsecorrecte objects
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
    public function findOneBySomeField($value): ?Reponsecorrecte
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

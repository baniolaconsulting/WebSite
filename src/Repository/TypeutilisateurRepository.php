<?php

namespace App\Repository;

use App\Entity\Typeutilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Typeutilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typeutilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typeutilisateur[]    findAll()
 * @method Typeutilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeutilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typeutilisateur::class);
    }

    // /**
    //  * @return Typeutilisateur[] Returns an array of Typeutilisateur objects
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
    public function findOneBySomeField($value): ?Typeutilisateur
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

<?php

namespace App\Repository;

use App\Entity\Compteutilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Compteutilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Compteutilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Compteutilisateur[]    findAll()
 * @method Compteutilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteutilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Compteutilisateur::class);
    }

    // /**
    //  * @return Compteutilisateur[] Returns an array of Compteutilisateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Compteutilisateur
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

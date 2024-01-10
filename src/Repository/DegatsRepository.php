<?php

namespace App\Repository;

use App\Entity\Degats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Degats>
 *
 * @method Degats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Degats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Degats[]    findAll()
 * @method Degats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DegatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Degats::class);
    }

//    /**
//     * @return Degats[] Returns an array of Degats objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Degats
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

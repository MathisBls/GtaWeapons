<?php

namespace App\Repository;

use App\Entity\PartieduCorps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PartieduCorps>
 *
 * @method PartieduCorps|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartieduCorps|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartieduCorps[]    findAll()
 * @method PartieduCorps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartieduCorpsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartieduCorps::class);
    }

//    /**
//     * @return PartieduCorps[] Returns an array of PartieduCorps objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PartieduCorps
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

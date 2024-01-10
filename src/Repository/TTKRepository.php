<?php

namespace App\Repository;

use App\Entity\TTK;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TTK>
 *
 * @method TTK|null find($id, $lockMode = null, $lockVersion = null)
 * @method TTK|null findOneBy(array $criteria, array $orderBy = null)
 * @method TTK[]    findAll()
 * @method TTK[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TTKRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TTK::class);
    }

//    /**
//     * @return TTK[] Returns an array of TTK objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TTK
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

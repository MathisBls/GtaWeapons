<?php

namespace App\Repository;

use App\Entity\Composants;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Composants>
 *
 * @method Composants|null find($id, $lockMode = null, $lockVersion = null)
 * @method Composants|null findOneBy(array $criteria, array $orderBy = null)
 * @method Composants[]    findAll()
 * @method Composants[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComposantsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Composants::class);
    }

//    /**
//     * @return Composants[] Returns an array of Composants objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Composants
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

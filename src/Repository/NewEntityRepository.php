<?php

namespace App\Repository;

use App\Entity\NewEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NewEntity>
 *
 * @method NewEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewEntity[]    findAll()
 * @method NewEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewEntity::class);
    }

//    /**
//     * @return NewEntity[] Returns an array of NewEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NewEntity
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

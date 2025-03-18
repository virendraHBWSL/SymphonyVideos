<?php

namespace App\Repository;

use App\Entity\NewActor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NewActor>
 *
 * @method NewActor|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewActor|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewActor[]    findAll()
 * @method NewActor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewActorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewActor::class);
    }

//    /**
//     * @return NewActor[] Returns an array of NewActor objects
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

//    public function findOneBySomeField($value): ?NewActor
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

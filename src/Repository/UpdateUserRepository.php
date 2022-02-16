<?php

namespace App\Repository;

use App\Entity\UpdateUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UpdateUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method UpdateUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method UpdateUser[]    findAll()
 * @method UpdateUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UpdateUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UpdateUser::class);
    }

    // /**
    //  * @return UpdateUser[] Returns an array of UpdateUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UpdateUser
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\AddBook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AddBook|null find($id, $lockMode = null, $lockVersion = null)
 * @method AddBook|null findOneBy(array $criteria, array $orderBy = null)
 * @method AddBook[]    findAll()
 * @method AddBook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddBookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AddBook::class);
    }

    // /**
    //  * @return AddBook[] Returns an array of AddBook objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AddBook
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

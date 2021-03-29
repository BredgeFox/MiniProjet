<?php

namespace App\Repository;

use App\Entity\Type;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Type|null find($id, $lockMode = null, $lockVersion = null)
 * @method Type|null findOneBy(array $criteria, array $orderBy = null)
 * @method Type[]    findAll()
 * @method Type[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Type::class);
    }

    // /**
    //  * @return Type[] Returns an array of Type objects
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
    public function findOneBySomeField($value): ?Type
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @return Type[]
     */
    public function GetTypeAvecEvenementNonExpires()
    {
        return $this->createQueryBuilder('t')
                    ->select('t')
                    ->innerJoin('t.evenements','e')
                    ->where('e.dateDebut > :date')
                    ->setParameter('date',new \DateTime())
                    ->getQuery()
                    ->getResult();

        // $qb = $this->createQueryBuilder('t')
        //     ->select('t')
        //     ->innerJoin('t.evenements','e')
        //     ->where('e.dateFin > :date')
        //     ->setParameter('date', new \DateTime());
        // return $qb->getQuery()->getResult();
    }

    /**
     * @return Type[]
     */
    public function GetTypeAvecEvenementExpires()
    {
        return $this->createQueryBuilder('t')
                    ->select('t')
                    ->innerJoin('t.evenements','e')
                    ->where('e.dateDebut <= :date')
                    ->setParameter('date',new \DateTime())
                    ->getQuery()
                    ->getResult();
    }
}

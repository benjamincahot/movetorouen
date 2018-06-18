<?php

namespace HomeBundle\Repository;

/**
 * EventsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventsRepository extends \Doctrine\ORM\EntityRepository
{

    public function eventFromThisCategory($category_id)
    {
        $qb = $this->createQueryBuilder('e')
                    ->andWhere('e.category = :cat', 'e.status = 1')
                    ->setParameter('cat', $category_id)
                    ->orderBy('e.startDate', 'DESC')
                    ->getQuery();

                return $qb->execute();
    }

    public function countAllEventsForThisCategory($category_id)
    {
        return $this->createQueryBuilder('e')
                  ->select('COUNT(e.id)')
                  ->andWhere('e.category = :cat')
                  ->setParameter('cat', $category_id)
                  ->getQuery()
                  ->getSingleScalarResult();

    }

    public function deleteEventsForThisCategory($category_id)
    {
        return $this->createQueryBuilder('e')
                  ->update('HomeBundle:Events','e')
                  ->set('e.status','?0')
                  ->setParameter(1, 0)
                  ->where('e.id', $category_id)
                  ->getQuery()
                  ->getSingleScalarResult();

                //   ->setParameter('cat', $category_id)


    }

    // Admin

    public function eventFromThisCategoryAdmin($category_id)
    {
        $qb = $this->createQueryBuilder('e')
                    ->andWhere('e.category = :cat')
                    ->setParameter('cat', $category_id)
                    ->orderBy('e.startDate', 'DESC')
                    ->getQuery();

                return $qb->execute();
    }

    public function eventModoFromThisCategory()
    {
        $qb = $this->createQueryBuilder('e')
                    ->andWhere('e.status = 0')
                    ->orderBy('e.startDate', 'DESC')
                    ->getQuery();

                return $qb->execute();
    }

}

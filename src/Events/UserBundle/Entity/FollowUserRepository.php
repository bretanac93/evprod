<?php

namespace Events\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FollowUserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FollowUserRepository extends EntityRepository
{
    /**
     * @param User $userId
     */
    public function findFollowers(User $user) {
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u, s FROM UserBundle:User u JOIN u.senders s WHERE s.sender = u AND s.receiver = :userS");
        $query->setParameter('userS', $user);

        return $query->getArrayResult();
    }

    public function findFollowings(User $user) {
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u, r FROM UserBundle:User u JOIN u.senders r WHERE r.sender = u AND r.receiver = :userS");
        $query->setParameter('userS', $user);

        return $query->getArrayResult();
    }
}

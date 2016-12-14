<?php

namespace AppBundle\DataFixtures\ORM\Core;

use AppBundle\Entity\Core\Scope;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * Class LoadScopesData
 * @package AppBundle\DataFixtures\ORM\Core
 */
class LoadScopesData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $entity01 = new Scope();
        $entity01
            ->setName('Public')
            ->setIdentifier('public')
        ;

        $manager->persist($entity01);
        
        $entity02 = new Scope();
        $entity02
            ->setName('Private')
            ->setIdentifier('public')
        ;

        $manager->persist($entity02);

        $entity03 = new Scope();
        $entity03
            ->setName('Friends only')
            ->setIdentifier('friends-only')
        ;

        $manager->persist($entity03);
        
        $manager->flush();
        
        $this->addReference('scope-public', $entity01);
        $this->addReference('scope-private', $entity02);
        $this->addReference('scope-friends-only', $entity03);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}

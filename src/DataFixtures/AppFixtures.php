<?php

namespace App\DataFixtures;

use App\Entity\OrderItem;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $first = new Product();
         $first->setName('Product 1');
         $first->addOrderItem(new OrderItem());
         $first->addOrderItem(new OrderItem());

         $manager->persist($first);

         $second = new Product();
         $second->setName('Product 2');
         $second->addOrderItem(new OrderItem());
         $second->addOrderItem(new OrderItem());

         $manager->persist($second);

        $manager->flush();
    }
}

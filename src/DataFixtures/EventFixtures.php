<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      for ($ae=1;$ae<=10;$ae++){
          $articleEvent=new Event();
          $articleEvent->setTitleEvent ("Evenement n°=$ae")
                        ->setDescEvent ("Description de l'evenement n°=$ae")
                        ->setImageEvent ("https://cdn.shopify.com/s/files/1/0248/2444/7021/products/Heatstock-Sneakers-France-Nike-Air-Force-1-Low-Off-White-MCA-University-Blue-1_2019_1200x1200.png?v=1576525503")
                        ->setCreatedAtEvent(new \DateTime());

                        $manager->persist($articleEvent);       
      }

        $manager->flush();
    }
}

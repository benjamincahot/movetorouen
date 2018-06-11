<?php

namespace HomeBundle\DataFixtures;

use User\UserBundle\Entity\User;
use HomeBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      $user = new User;
      $user->setUsername("Benjamin");
      $user->setEmail('benjamincahot@icloud.com');
      $user->setPassword('$2y$13$Uscv2IOuYaAR1QQwrL.yzuDj8kiG484wReDOqb9out22k/FMya7.K');
      $user->setRoles(array('ROLE_ADMIN'));
      $user->setEnabled(true);
      $this->addReference('ertezr', $user);
      $manager->persist($user);

      $user2 = new User;
      $user2->setUsername("Antoine");
      $user2->setEmail ('quidelantoine@gmail.com');
      $user2->setPassword('$2y$13$aalfx2XWPo/6HO5.UE7wEeaG7TVa2zylJ1pF3BgcjICkcg50ut24.');
      $user2->setRoles(array('ROLE_ADMIN'));
      $user2->setEnabled(true);
      $this->addReference('zezetzetzer', $user2);
      $manager->persist($user2);

      $user3 = new User;
      $user3->setUsername("Indorium");
      $user3->setEmail ('tiflobo76250@gmail.com');
      $user3->setPassword('$2y$13$fcJbB7e6sgyZeOTe8B0gu.WAdujEYhTf25N9Q7CNDJvbqy8R63DOq');
      $user3->setRoles(array('ROLE_ADMIN'));
      $user3->setEnabled(true);
      $this->addReference('dkegehree', $user3);
      $manager->persist($user3);

      $user4 = new User;
      $user4->setUsername("Florent");
      $user4->setEmail ('fdemech@gmail.com');
      $user4->setPassword('$2y$13$ZuWTTOfTVHJtmoVbnv5C/O4dHBxINAvxRmRRgnWhViloX1gpOcf0W');
      $user4->setRoles(array('ROLE_ADMIN'));
      $user4->setEnabled(true);
      $this->addReference('juifsdrtgfs', $user4);
      $manager->persist($user4);

      $user5 = new User;
      $user5->setUsername("Jeremy");
      $user5->setEmail ('jeremy.dilard@outlook.com');
      $user5->setPassword('$2y$13$Uk3Ml8b4FHcrKMBlTv9nE.aucKpiW2RpPjKFtGCcL.eOGloZ73TuK');
      $user5->setRoles(array('ROLE_ADMIN'));
      $user5->setEnabled(true);
      $this->addReference('szretujz', $user5);
      $manager->persist($user5);

      $user6 = new User;
      $user6->setUsername("User");
      $user6->setEmail ('user@unknown.fr');
      $user6->setPassword('$2y$13$Uscv2IOuYaAR1QQwrL.yzuDj8kiG484wReDOqb9out22k/FMya7.K');
      $user6->setRoles(array('ROLE_USER'));
      $user6->setEnabled(true);
      $this->addReference('zeraztesze', $user6);
      $manager->persist($user6);

      $sport = new Category();
      $sport->setName("Sport");
      $manager->persist($sport);


      $evenement = new Category();
      $evenement->setName("Evénement");
      $manager->persist($evenement);

      $parc = new Category();
      $parc->setName("Parc");
      $manager->persist($parc);

      $monument = new Category();
      $monument->setName("Monument");
      $manager->persist($monument);

      $manager->flush();
    }
}

<?php

namespace HomeBundle\DataFixtures;

use User\UserBundle\Entity\User;
use HomeBundle\Entity\Category;
use HomeBundle\Entity\Events;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use \DateTime;

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
      $user6->setUsername("BOT");
      $user6->setEmail ('robot@movetorouen.fr');
      $user6->setPassword('$2y$13$tSu57X7bVGnDCvpFbm14O.FitUbKZtSuD5zvFnIWCsmT9XU.fVj1q');
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



      // Parcs
      $event = new Events();
      $event->setCategory($parc);
      $event->setTitle('Square Verdrel');
      $event->setDescription('Le square Verdrel est un square dans le centre-ville de Rouen, entre la rue Jeanne-d\'Arc, le musée des beaux-arts et le musée de la céramique. Superficie de 9000m².');
      $event->setStartDate(new DateTime('2014/06/04'));
      $event->setEndDate(new DateTime('2015/07/05'));
      $event->setPrice('0');
      $event->setUser($user2);
      $event->setPlace('14 Rue du Bailliage, 76000 Rouen');
      $manager->persist($event);

      $event2 = new Events();
      $event2->setCategory($parc);
      $event2->setTitle('Jardin de l’Hôtel-de-Ville');
      $event2->setDescription('Lieu de détente, à mi-chemin entre le parc urbain et la prairie, ce jardin est également un passage piétonnier qui relie le centre-ville aux quartiers Saint-Nicaise et Saint-Vivien. Superficie de 25789m².Lieu de détente, à mi-chemin entre le parc urbain et la prairie, ce jardin est également un passage piétonnier qui relie le centre-ville aux quartiers Saint-Nicaise et Saint-Vivien. Superficie de 25789m².');
      $event2->setStartDate(new DateTime('2014/06/04'));
      $event2->setEndDate(new DateTime('2015/07/05'));
      $event2->setUser($user2);
      $event2->setPrice('0');
      $event2->setPlace('Place Saint-Vivien, 76000 Rouen');
      $manager->persist($event2);

      $event3 = new Events();
      $event3->setCategory($parc);
      $event3->setTitle('Prairie Saint Sever');
      $event3->setDescription('Une prairie en plein cœur de ville, une grande promenade fluviale sur plus de 3km entre allées de cheminement piéton en béton ou en pavés, espaces de jeux pour enfants, massifs ornés de fleurs ou terrain de pétanque. Superficie : 1,5 hectare.');
      $event3->setStartDate(new DateTime('2014/06/04'));
      $event3->setEndDate(new DateTime('2015/07/05'));
      $event3->setUser($user2);
      $event3->setPrice('0');
      $event3->setPlace('Quai Saint-Sever, 76100 Rouen');
      $manager->persist($event3);

      $event4 = new Events();
      $event4->setCategory($parc);
      $event4->setTitle('Parc Grammont');
      $event4->setDescription('Le parc Grammont est un parc urbain situé à Rouen dans le quartier Grammont, sur l\'emplacement des anciens abattoirs de la ville, sa création s\'inscrit dans le cadre du grand projet de ville de Rouen. Superficie : 25000m².');
      $event4->setStartDate(new DateTime('2014/06/04'));
      $event4->setEndDate(new DateTime('2015/07/05'));
      $event4->setUser($user2);
      $event4->setPrice('0');
      $event4->setPlace('17 Rue Henri II Plantagenêt, 76100 Rouen');
      $manager->persist($event4);

      $event5 = new Events();
      $event5->setCategory($parc);
      $event5->setTitle('Jardin de Champ de Mars');
      $event5->setDescription('Beau jardin de colline avec une jolie fontaine. Bon endroit pour se détendre au soleil pendant un moment.');
      $event5->setStartDate(new DateTime('2014/06/04'));
      $event5->setEndDate(new DateTime('2015/07/05'));
      $event5->setUser($user2);
      $event5->setPrice('0');
      $event5->setPlace('Rue Roger-Bésus, 76100 Rouen');
      $manager->persist($event5);

      // Sports
      $event6 = new Events();
      $event6->setCategory($sport);
      $event6->setTitle('Moving Rouen');
      $event6->setDescription('Sur 1 200 m2, de nombreuses activités: musculation, cardio- training, fitness,... et un espace détente à volonté dans toutes nos formules : Sauna, hammam, jacuzzi.');
      $event6->setStartDate(new DateTime('2014/06/04'));
      $event6->setEndDate(new DateTime('2015/07/05'));
      $event6->setUser($user2);
      $event6->setPrice('39€ par mois');
      $event6->setPlace('10 Place Saint-Marc, 76000 Rouen');
      $manager->persist($event6);

      $event7 = new Events();
      $event7->setCategory($sport);
      $event7->setTitle('Basic-Fit');
      $event7->setDescription('Club est équipé d\'une large gamme d\'appareils de fitness et propose de nombreux cours collectifs. Quel que soit votre âge, votre niveau de pratique et votre objectif forme, nous disposons de la solution d\'entraînement qui répond à vos besoins spécifiques.');
      $event7->setStartDate(new DateTime('2014/06/04'));
      $event7->setEndDate(new DateTime('2015/07/05'));
      $event7->setUser($user2);
      $event7->setPrice('28,99€ par mois ou 19,99€ par an');
      $event7->setPlace('69-75 Rue Saint-Sever, 76100 Rouen');
      $manager->persist($event7);

      $event8 = new Events();
      $event8->setCategory($sport);
      $event8->setTitle('Accrosport Rouen – Saint-Julien');
      $event8->setDescription('Club entièrement refait à neuf compte un studio pour les cours collectifs, un studio TRX, un studio cycling, un studio functional training et un plateau de musculation.');
      $event8->setStartDate(new DateTime('2014/06/04'));
      $event8->setEndDate(new DateTime('2015/07/05'));
      $event8->setUser($user2);
      $event8->setPrice('undefined');
      $event8->setPlace('49 Rue Saint-Julien, 76100 Rouen');
      $manager->persist($event8);

      $event9 = new Events();
      $event9->setCategory($sport);
      $event9->setTitle('Accrosport Rouen – Saint-Julien');
      $event9->setDescription('Club entièrement refait à neuf compte un studio pour les cours collectifs, un studio TRX, un studio cycling, un studio functional training et un plateau de musculation.');
      $event9->setStartDate(new DateTime('2014/06/04'));
      $event9->setEndDate(new DateTime('2015/07/05'));
      $event9->setUser($user2);
      $event9->setPrice('undefined');
      $event9->setPlace('49 Rue Saint-Julien, 76100 Rouen');
      $manager->persist($event9);

      $event10 = new Events();
      $event10->setCategory($sport);
      $event10->setTitle('Feel Sport Rouen');
      $event10->setDescription('undefined');
      $event10->setStartDate(new DateTime('2014/06/04'));
      $event10->setEndDate(new DateTime('2015/07/05'));
      $event10->setUser($user2);
      $event10->setPrice('undefined');
      $event10->setPlace('7C Rue Jeanne d\'Arc, 76000 Rouen');
      $manager->persist($event10);

      // Monuments
      $event11 = new Events();
      $event11->setCategory($monument);
      $event11->setTitle('Le Gros-Horloge');
      $event11->setDescription('Horloge astronomique historique du XIVe siècle située sur une arche Renaissance avec des sculptures ouvragées.');
      $event11->setStartDate(new DateTime('2014/06/04'));
      $event11->setEndDate(new DateTime('2015/07/05'));
      $event11->setUser($user2);
      $event11->setPrice('7€-3,50€');
      $event11->setPlace('Rue du Gros Horloge, 76000 Rouen');
      $manager->persist($event11);

      $event12 = new Events();
      $event12->setCategory($monument);
      $event12->setTitle('Porte Guillaume Lion');
      $event12->setDescription('La porte, la fontaine et les vestiges de l\'ancienne église des Augustins sont classés au titre des monuments historique en 1958.');
      $event12->setStartDate(new DateTime('2014/06/04'));
      $event12->setEndDate(new DateTime('2015/07/05'));
      $event12->setUser($user2);
      $event12->setPrice('0');
      $event12->setPlace('11 Quai de Paris, 76000 Rouen');
      $manager->persist($event12);

      $event13 = new Events();
      $event13->setCategory($monument);
      $event13->setTitle('Couvent des Dominicains de Rouen');
      $event13->setDescription('Les façades et les toitures des bâtiments conventuels, ainsi que le cloître et la chapelle sont inscrits au titre des monuments historiques en 1976.');
      $event13->setStartDate(new DateTime('2014/06/04'));
      $event13->setEndDate(new DateTime('2015/07/05'));
      $event13->setUser($user2);
      $event13->setPrice('0');
      $event13->setPlace('24 Rue de Joyeuse, 76000 Rouen');
      $manager->persist($event13);

      $event14 = new Events();
      $event14->setCategory($monument);
      $event14->setTitle('Fontaine Sainte-Marie');
      $event14->setDescription('Fontaine construite à la fin du XIXe siècle, possède un réservoir souterrain qui sert toujours aujourd\'hui à alimenter la ville en eau potable. A la suite de sa construction, la ville lance un concours pour orner la fontaine.');
      $event14->setStartDate(new DateTime('2014/06/04'));
      $event14->setEndDate(new DateTime('2015/07/05'));
      $event14->setUser($user2);
      $event14->setPrice('0');
      $event14->setPlace('105 Boulevard de l\'Yser, 76000 Rouen');
      $manager->persist($event14);

      $event15 = new Events();
      $event15->setCategory($monument);
      $event15->setTitle('Donjon de Rouen');
      $event15->setDescription('Unique tour restante du château datant du début du XIIIe siècle où Jeanne d\'Arc fut emprisonnée.');
      $event15->setStartDate(new DateTime('2014/06/04'));
      $event15->setEndDate(new DateTime('2015/07/05'));
      $event15->setUser($user2);
      $event15->setPrice('5');
      $event15->setPlace('Rue Bouvreuil, 76000 Rouen ');
      $manager->persist($event15);

      // Evènements

      $manager->flush();
    }
}

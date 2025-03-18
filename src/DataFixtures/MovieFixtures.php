<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
          $movie=new Movie();
          $movie->setTitle("Avengers");
            $movie->setReleaseYear(2012);
            $movie->setDescription("Earth's mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.");
            $movie->setImagePath("https://cdn.marvel.com/content/1x/avengersendgame_lob_crd_05.jpg");
            $manager->persist($movie);

            $movie2=new Movie();
            $movie2->setTitle("The Dark Knight");
              $movie2->setReleaseYear(2002);
              $movie2->setDescription("Earth's mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.");
              $movie2->setImagePath("https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTfE_qrYMBZ_JB8om-34WGaZARhpX26yWRttqIDvn4_7l--UzX8mxKcPrc59IcvTpEA_G8gPA");
              $manager->persist($movie2);

              $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

final class AppFixtures extends Fixture
{

    /**
     * @var ObjectManager
     */
    private $manager;

    public function load(ObjectManager $manager) : void
    {
    $this->manager=$manager;
    $this->loadBooks();

    $this->manager->flush();
    }

    private function loadBooks(): void
    {
        for($i=0;$i<5;$i++)
        {
        $book = (new Book())
            ->setTitre("Livre de test n°".$i)
            ->setAuteur("John Doe")
            ->setSynopsis("Ceci est un livre de test")
            ->setImage("https://cdn.discordapp.com/attachments/430087482961559553/690913561555238932/images.png");
            $this->manager->persist($book);
        }
    }

}

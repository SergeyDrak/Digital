<?php

namespace App\DataFixtures;

use Sergeydrak\SubscriptionBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    private $em;


    public function __construct(
      EntityManagerInterface $entityManager
    ) {
        $this->em = $entityManager;
    }

    public function load(ObjectManager $manager)
    {
        $categoryData = [
          0 => [
            'name' => 'iPhone',
          ],
          1 => [
            'name' => 'iPad',
          ],
        ];

        foreach ($categoryData as $category) {
            $newCategory = new Category();
            $newCategory->setName($category['name']);
            $this->em->persist($newCategory);
        }
        $this->em->flush();
    }

}


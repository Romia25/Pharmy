<?php


namespace App\Repository;


use App\Entity\ImageBanner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
/**
 * @method ImageBanner|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageBanner|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageBanner[]    findAll()
 * @method ImageBanner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ImageBannerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageBanner::class);
    }
}

<?php


namespace App\Controller;


use App\Repository\ImageBannerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImageBannerController extends AbstractController
{
    public function getImages(ImageBannerRepository $imageBanner){
        return $this->render('Homepage/_images.html.twig', ['images' => $imageBanner->findAll()]);
    }
}

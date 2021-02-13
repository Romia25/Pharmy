<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Image;

/**
 * @ORM\Entity()
 */
class ImageBanner extends Image implements ImageBannerInterface
{
}
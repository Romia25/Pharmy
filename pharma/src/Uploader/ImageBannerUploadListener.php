<?php


namespace App\Uploader;

use App\Entity\ImageBannerInterface;
use Sylius\Component\Core\Uploader\ImageUploaderInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Webmozart\Assert\Assert;

class ImageBannerUploadListener
{
    /**
     * @var ImageUploaderInterface
     */
    private $uploader;

    /**
     * ImageBannerUploadListener constructor.
     * @param ImageUploaderInterface $uploader
     */
    public function __construct(ImageUploaderInterface $uploader)
    {
        $this->uploader = $uploader;
    }

    public function upload(GenericEvent $event):void
    {
        $subject = $event->getSubject();
        Assert::isInstanceOf($subject, ImageBannerInterface::class);
        if($subject->hasFile()){
            $this->uploader->upload($subject);
        }
    }

    public function edit(GenericEvent $event):void
    {
        $subject = $event->getSubject();

        // remove older file
        if ($subject->hasFile()) {
            $this->uploader->remove($subject->getPath());
            Assert::isInstanceOf($subject, ImageBannerInterface::class);
            $this->uploader->upload($subject);
        }
    }

    public function remove(GenericEvent $event):void
    {
        $subject = $event->getSubject();
        Assert::isInstanceOf($subject, ImageBannerInterface::class);
        if($subject->hasFile()){
            $this->uploader->remove($subject);
        }
    }


}

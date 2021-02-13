<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WelcomePageController
{
    /** @var EngineInterface */
    private $templatingEngine;

    public function __construct(EngineInterface $templatingEngine)
    {
        $this->templatingEngine = $templatingEngine;
    }

    public function indexAction(Request $request): Response
    {
        return $this->templatingEngine->renderResponse('Homepage/inde.html.twig');
    }
}

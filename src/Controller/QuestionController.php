<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @Route("/questions/how-to-tie-my-shoes-with-magic")
     */
    public function show(): Response
    {
        return new Response('Future page to show a question');
    }
}

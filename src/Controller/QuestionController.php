<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class QuestionController
{
    public function homepage(): Response
    {
        return new Response('What a bewitching controller we have conjured!');
    }
}

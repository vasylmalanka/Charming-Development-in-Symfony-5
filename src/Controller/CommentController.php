<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}", methods="POST")
     */
    public function commentVote(int $id, string $direction): Response
    {
        // todo us id to query database

        if ($direction === 'up') {
            $currentVoteCount = random_int(7, 100);
        } else {
            $currentVoteCount = random_int(0, 5);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}

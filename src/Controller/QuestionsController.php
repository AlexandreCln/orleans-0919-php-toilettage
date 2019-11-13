<?php

namespace App\Controller;

use App\Model\QuestionsManager;

class QuestionsController extends AbstractController
{

    public function index()
    {
        $questionManager = new QuestionsManager('question');
        $questions = $questionManager->selectAll();

        return $this->twig->render('Questions/index.html.twig', ['questions' => $questions]);
    }
}
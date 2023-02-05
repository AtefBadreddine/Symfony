<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{

    #[Route('/teacher/{name}', name: 'Teacher_Controller')]
    public function showTeacher($name): Response
    {
        return $this->render('teacher/showTeacher.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/teachertostudent', name: 'teachertostudent')]
    public function gotoStudent()
    {
        return $this->redirectToRoute('Student_Controller');
    }
}


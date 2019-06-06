<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function index()
    {
        return $this->render('index.html.twig');
    }

    public function school()
    {
        return $this->render('school.html.twig');
    }

    public function course()
    {
        return $this->render('course.html.twig');
    }
}
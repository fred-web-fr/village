<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }

    /**
     * @Route("/actu", name="actu_page")
     */
    public function actu()
    {
      return $this->render('home_page/actu.html.twig');  
    } 
    /**
     * @Route("/event", name="event_page")
     */
    public function event()
    {
      $repoEvent=$this->getDoctrine()->getRepository(Event::class);
      $articleEvents=$repoEvent->findAll();
      
      return $this->render('home_page/event.html.twig',[
        "articleEvents" =>$articleEvents
      ]);
    } 
  /**
     * @Route("/story", name="story_page")
     */
    public function story()
    {
      return $this->render('home_page/story.html.twig');  
    }
  
     /**
     * @Route("/admin", name="admin_page")
     */
    public function admin()
    {
      return $this->render('Admin/admin.html.twig');  
    }  
}


<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mooc\QuizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mooc\QuizBundle\Entity\Quiz;
use Mooc\QuizBundle\Entity\Assignement;
use Mooc\QuizBundle\Entity\Reponse;
use Mooc\QuizBundle\Entity\Question;
/**
 * Description of PasserQuizController
 *
 * @author Firas
 */
class PasserQuizController extends Controller {
    //put your code here
    public function examAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocQuizBundle:Quiz')->find($id);
        $Request=$this->getRequest();
        $question = $em->getRepository('MoocQuizBundle:Question')->findByidquiz($id);
        $reponse =$em->getRepository('MoocQuizBundle:Reponse')->findAll();
        $score=$Request->get("text1");

        if($Request->getMethod()=='POST'){
        $idquiz=$Request->get("text2");
        $iduser=$Request->get("text3");
        $entity = new Assignement();
        $user = $em->getRepository('MoocQuizBundle:User')->find($iduser);
        $badge = $em->getRepository('MoocQuizBundle:Badge')->find(1);
        $quiz =$em->getRepository('MoocQuizBundle:quiz')->find($idquiz);
        $entity->setIdbadge($badge);
        $entity->setIdquiz($quiz);
        $entity->setIduser($user);
        $entity->setScore($score);
        $em->persist($entity);
        $em->flush();
        return $this->render('MoocQuizBundle:PasserQuiz:finexam.html.twig', array(
            'score'   => $score,
            
        ));
        }

        if ((!$reponse)&&(!$question)) {
            throw $this->createNotFoundException('Unable to find Quiz entity.');
        }
        return $this->render('MoocQuizBundle:PasserQuiz:exam.html.twig', array(
            'reponse'   => $reponse,
            'questions'  => $question,
            'quiz'  => $quiz,
        ));
    }
    
    
    public function questionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocQuizBundle:Quiz')->find($id);
            if ($quiz->getType()=='Entrainement')
                {
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocQuizBundle:Quiz')->find($id);
        $Request=$this->getRequest();
        $question = $em->getRepository('MoocQuizBundle:Question')->findByidquiz($id);
        $reponse =$em->getRepository('MoocQuizBundle:Reponse')->findAll();
        $score=$Request->get("text1");

        if($Request->getMethod()=='POST'){
        $idquiz=$Request->get("text2");
        $iduser=$Request->get("text3");
        $entity = new Assignement();
        $user = $em->getRepository('MoocQuizBundle:User')->find($iduser);
        $badge = $em->getRepository('MoocQuizBundle:Badge')->find(1);
        $quiz =$em->getRepository('MoocQuizBundle:quiz')->find($idquiz);
        $entity->setIdbadge($badge);
        $entity->setIdquiz($quiz);
        $entity->setIduser($user);
        $entity->setScore($score);
        $em->persist($entity);
        $em->flush();
        return $this->render('MoocQuizBundle:PasserQuiz:finexam.html.twig', array(
            'score'   => $score,
            
        ));
        }

        if ((!$reponse)&&(!$question)) {
            throw $this->createNotFoundException('Unable to find Quiz entity.');
        }
        return $this->render('MoocQuizBundle:PasserQuiz:exam.html.twig', array(
            'reponse'   => $reponse,
            'questions'  => $question,
            'quiz'  => $quiz,
        ));
    }
else    
{
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('MoocQuizBundle:Quiz')->find($id);
        $Request=$this->getRequest();
        $question = $em->getRepository('MoocQuizBundle:Question')->findByidquiz($id);
        $reponse =$em->getRepository('MoocQuizBundle:Reponse')->findAll();
        $timer=$Request->get("text4");
        $score=$Request->get("text1");

        if(($Request->getMethod()=='POST')||($timer=="timer")){
        $idquiz=$Request->get("text2");
        $iduser=$Request->get("text3");
        $entity = new Assignement();
        $user = $em->getRepository('MoocQuizBundle:User')->find($iduser);
        $badge = $em->getRepository('MoocQuizBundle:Badge')->find(1);
        $quiz =$em->getRepository('MoocQuizBundle:quiz')->find($idquiz);
        $entity->setIdbadge($badge);
        $entity->setIdquiz($quiz);
        $entity->setIduser($user);
        $entity->setScore($score);
        $em->persist($entity);
        $em->flush();
        return $this->render('MoocQuizBundle:PasserQuiz:finexam.html.twig', array(
            'score'   => $score,
            
        ));
        }

        if ((!$reponse)&&(!$question)) {
            throw $this->createNotFoundException('Unable to find Quiz entity.');
        }
        return $this->render('MoocQuizBundle:PasserQuiz:question.html.twig', array(
            'reponse'   => $reponse,
            'questions'  => $question,
            'quiz'  => $quiz,
        ));
    }
}
    
    
    
    
}

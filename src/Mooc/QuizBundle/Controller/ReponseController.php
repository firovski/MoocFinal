<?php

namespace Mooc\QuizBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mooc\QuizBundle\Entity\Reponse;
use Mooc\QuizBundle\Entity\Question;
use Mooc\QuizBundle\Form\ReponseType;

/**
 * Reponse controller.
 *
 */
class ReponseController extends Controller
{

    /**
     * Lists all Reponse entities.
     *
     */
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MoocQuizBundle:Reponse')->findAll();
        return $this->render('MoocQuizBundle:Reponse:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    public function listAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MoocQuizBundle:Reponse')->findByidquestion($id);
        return $this->render('MoocQuizBundle:Reponse:list.html.twig', array(
            'entities' => $entities,
            'id'=> $id,
        ));
    }
    
    /**
     * Creates a new Reponse entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Reponse();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $Request=$this->getRequest();
        $vf=$Request->get("vf");
        if ($vf=="true"){
        $entity->setReponsecorrectradio(true);
        }
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reponse_show', array('id' => $entity->getId())));
        }

        return $this->render('MoocQuizBundle:Reponse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Reponse entity.
     *
     * @param Reponse $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reponse $entity)
    {
        $form = $this->createForm(new ReponseType(), $entity, array(
            'action' => $this->generateUrl('reponse_create'),
            'method' => 'POST',
        ));
        

        $form->add('submit', 'submit', array('label' => 'Create'));
        

        return $form;
    }

    /**
     * Displays a form to create a new Reponse entity.
     *
     */
    public function newAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $question = $em->getRepository('MoocQuizBundle:Question')->find($id);
        $entity = new Reponse();
        
        $entity->setIdquestion($question);
        
        $form   = $this->createCreateForm($entity);
        return $this->render('MoocQuizBundle:Reponse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'id'     => $id,
        ));
    }

    /**
     * Finds and displays a Reponse entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocQuizBundle:Reponse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reponse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocQuizBundle:Reponse:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reponse entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocQuizBundle:Reponse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reponse entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocQuizBundle:Reponse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Reponse entity.
    *
    * @param Reponse $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Reponse $entity)
    {
        $form = $this->createForm(new ReponseType(), $entity, array(
            'action' => $this->generateUrl('reponse_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Reponse entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocQuizBundle:Reponse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reponse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reponse_edit', array('id' => $id)));
        }

        return $this->render('MoocQuizBundle:Reponse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Reponse entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MoocQuizBundle:Reponse')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reponse entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reponse'));
    }

    /**
     * Creates a form to delete a Reponse entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reponse_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}

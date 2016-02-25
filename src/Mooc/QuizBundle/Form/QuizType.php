<?php

namespace Mooc\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuizType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('quiznom', 'text')
                ->add('quizdescription', 'textarea')
                ->add('dateajout', 'date', array(
                    'data' => new \DateTime('now'),
                    'attr' => array('style' => 'display:none;'),
                ))
                ->add('intro', 'textarea')
                ->add('type', 'choice', array(
                    'choices' => array(
                        'Final' => 'Final',
                        'Entrainement' => 'Entrainement',)))
                ->add('time')
                ->add('idformateur', 'entity', array(
                    'class' => 'MoocQuizBundle:Formateur',
                    'property' => 'ID',
                    'attr' => array('style' => 'display:none;'),
                ))
                ->add('idcour', 'entity', array(
                    'class' => 'MoocQuizBundle:Cour',
                    'property' => 'ID',
                    'attr' => array('style' => 'display:none;'),
                ))
                ->add('submit', 'submit', array('label' => 'Create'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\QuizBundle\Entity\Quiz'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'mooc_quizbundle_quiz';
    }

}

<?php

namespace Mooc\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('questiontext', 'textarea')
                ->add('type', 'choice', array(
                    'choices' => array(
                        'placeholder' => 'Choisissez un type',
                        'Choix multiple' => 'Choix multiple',
                        'Choix unique' => 'Choix unique',
                        'Reponse par texte' => 'Reponse par texte',)))
                ->add('point')
                ->add('idquiz', 'entity', array(
                    'class' => 'MoocQuizBundle:Quiz',
                    'property' => 'ID',
                    'attr' => array('style' => 'display:none;'),))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\QuizBundle\Entity\Question'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'mooc_quizbundle_question';
    }

}

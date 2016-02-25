<?php

namespace Mooc\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReponseType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('reponsetext', 'textarea')
                ->add('reponsecorrecttext', 'textarea')
                ->add('reponsecorrectradio')
                ->add('idquestion', 'entity', array(
                    'class' => 'MoocQuizBundle:Question',
                    'property' => 'ID',
                    'attr' => array('style' => 'display:none;'),
                ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\QuizBundle\Entity\Reponse'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'mooc_quizbundle_reponse';
    }

}

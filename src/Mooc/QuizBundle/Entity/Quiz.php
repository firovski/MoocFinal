<?php

namespace Mooc\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 */
class Quiz
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $quiznom;

    /**
     * @var string
     */
    private $quizdescription;

    /**
     * @var \DateTime
     */
    private $dateajout;

    /**
     * @var string
     */
    private $intro;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $time;

    /**
     * @var \Mooc\QuizBundle\Entity\Formateur
     */
    private $idformateur;

    /**
     * @var \Mooc\QuizBundle\Entity\Cour
     */
    private $idcour;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quiznom
     *
     * @param string $quiznom
     * @return Quiz
     */
    public function setQuiznom($quiznom)
    {
        $this->quiznom = $quiznom;

        return $this;
    }

    /**
     * Get quiznom
     *
     * @return string 
     */
    public function getQuiznom()
    {
        return $this->quiznom;
    }

    /**
     * Set quizdescription
     *
     * @param string $quizdescription
     * @return Quiz
     */
    public function setQuizdescription($quizdescription)
    {
        $this->quizdescription = $quizdescription;

        return $this;
    }

    /**
     * Get quizdescription
     *
     * @return string 
     */
    public function getQuizdescription()
    {
        return $this->quizdescription;
    }

    /**
     * Set dateajout
     *
     * @param \DateTime $dateajout
     * @return Quiz
     */
    public function setDateajout($dateajout)
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    /**
     * Get dateajout
     *
     * @return \DateTime 
     */
    public function getDateajout()
    {
        return $this->dateajout;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return Quiz
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Quiz
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set time
     *
     * @param integer $time
     * @return Quiz
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set idformateur
     *
     * @param \Mooc\QuizBundle\Entity\Formateur $idformateur
     * @return Quiz
     */
    public function setIdformateur(\Mooc\QuizBundle\Entity\Formateur $idformateur = null)
    {
        $this->idformateur = $idformateur;

        return $this;
    }

    /**
     * Get idformateur
     *
     * @return \Mooc\QuizBundle\Entity\Formateur 
     */
    public function getIdformateur()
    {
        return $this->idformateur;
    }

    /**
     * Set idcour
     *
     * @param \Mooc\QuizBundle\Entity\Cour $idcour
     * @return Quiz
     */
    public function setIdcour(\Mooc\QuizBundle\Entity\Cour $idcour = null)
    {
        $this->idcour = $idcour;

        return $this;
    }

    /**
     * Get idcour
     *
     * @return \Mooc\QuizBundle\Entity\Cour 
     */
    public function getIdcour()
    {
        return $this->idcour;
    }
}

<?php

namespace Mooc\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignement
 */
class Assignement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $score;

    /**
     * @var \Mooc\QuizBundle\Entity\Quiz
     */
    private $idquiz;

    /**
     * @var \Mooc\QuizBundle\Entity\Badge
     */
    private $idbadge;

    /**
     * @var \Mooc\QuizBundle\Entity\User
     */
    private $iduser;


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
     * Set score
     *
     * @param integer $score
     * @return Assignement
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set idquiz
     *
     * @param \Mooc\QuizBundle\Entity\Quiz $idquiz
     * @return Assignement
     */
    public function setIdquiz($idquiz)
    {
        $this->idquiz = $idquiz;

        return $this;
    }

    /**
     * Get idquiz
     *
     * @return \Mooc\QuizBundle\Entity\Quiz 
     */
    public function getIdquiz()
    {
        return $this->idquiz;
    }

    /**
     * Set idbadge
     *
     * @param \Mooc\QuizBundle\Entity\Badge $idbadge
     * @return Assignement
     */
    public function setIdbadge($idbadge)
    {
        $this->idbadge = $idbadge;

        return $this;
    }

    /**
     * Get idbadge
     *
     * @return \Mooc\QuizBundle\Entity\Badge 
     */
    public function getIdbadge()
    {
        return $this->idbadge;
    }

    /**
     * Set iduser
     *
     * @param \Mooc\QuizBundle\Entity\User $iduser
     * @return Assignement
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Mooc\QuizBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}

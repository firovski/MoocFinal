<?php

namespace Mooc\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 */
class Question
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $questiontext;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $point;

    /**
     * @var \Mooc\QuizBundle\Entity\Quiz
     */
    private $idquiz;


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
     * Set questiontext
     *
     * @param string $questiontext
     * @return Question
     */
    public function setQuestiontext($questiontext)
    {
        $this->questiontext = $questiontext;

        return $this;
    }

    /**
     * Get questiontext
     *
     * @return string 
     */
    public function getQuestiontext()
    {
        return $this->questiontext;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Question
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
     * Set point
     *
     * @param integer $point
     * @return Question
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return integer 
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set idquiz
     *
     * @param \Mooc\QuizBundle\Entity\Quiz $idquiz
     * @return Question
     */
    public function setIdquiz($idquiz )
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
}

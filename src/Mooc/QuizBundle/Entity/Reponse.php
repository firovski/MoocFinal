<?php

namespace Mooc\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 */
class Reponse
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $reponsetext;

    /**
     * @var string
     */
    private $reponsecorrecttext;

    /**
     * @var boolean
     */
    private $reponsecorrectradio;

    /**
     * @var \Mooc\QuizBundle\Entity\Question
     */
    private $idquestion;


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
     * Set reponsetext
     *
     * @param string $reponsetext
     * @return Reponse
     */
    public function setReponsetext($reponsetext)
    {
        $this->reponsetext = $reponsetext;

        return $this;
    }

    /**
     * Get reponsetext
     *
     * @return string 
     */
    public function getReponsetext()
    {
        return $this->reponsetext;
    }

    /**
     * Set reponsecorrecttext
     *
     * @param string $reponsecorrecttext
     * @return Reponse
     */
    public function setReponsecorrecttext($reponsecorrecttext)
    {
        $this->reponsecorrecttext = $reponsecorrecttext;

        return $this;
    }

    /**
     * Get reponsecorrecttext
     *
     * @return string 
     */
    public function getReponsecorrecttext()
    {
        return $this->reponsecorrecttext;
    }

    /**
     * Set reponsecorrectradio
     *
     * @param boolean $reponsecorrectradio
     * @return Reponse
     */
    public function setReponsecorrectradio($reponsecorrectradio)
    {
        $this->reponsecorrectradio = $reponsecorrectradio;

        return $this;
    }

    /**
     * Get reponsecorrectradio
     *
     * @return boolean 
     */
    public function getReponsecorrectradio()
    {
        return $this->reponsecorrectradio;
    }

    /**
     * Set idquestion
     *
     * @param \Mooc\QuizBundle\Entity\Question $idquestion
     * @return Reponse
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;

        return $this;
    }

    /**
     * Get idquestion
     *
     * @return \Mooc\QuizBundle\Entity\Question 
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }
}

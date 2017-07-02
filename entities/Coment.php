<?php

/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 02.07.2017
 * Time: 14:43
 */
class Coment
{
    private $comentId;
    private $bookId;
    private $nameOfComentAuthor;
    private $comentText;
    private $comentDate;

    /**
     * Coment constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getComentId()
    {
        return $this->comentId;
    }

    /**
     * @param mixed $comentId
     */
    public function setComentId($comentId)
    {
        $this->comentId = $comentId;
    }

    /**
     * @return mixed
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * @param mixed $bookId
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;
    }

    /**
     * @return mixed
     */
    public function getNameOfComentAuthor()
    {
        return $this->nameOfComentAuthor;
    }

    /**
     * @param mixed $nameOfComentAuthor
     */
    public function setNameOfComentAuthor($nameOfComentAuthor)
    {
        $this->nameOfComentAuthor = $nameOfComentAuthor;
    }

    /**
     * @return mixed
     */
    public function getComentText()
    {
        return $this->comentText;
    }

    /**
     * @param mixed $comentText
     */
    public function setComentText($comentText)
    {
        $this->comentText = $comentText;
    }

    /**
     * @return mixed
     */
    public function getComentDate()
    {
        return $this->comentDate;
    }

    /**
     * @param mixed $comentDate
     */
    public function setComentDate($comentDate)
    {
        $this->comentDate = $comentDate;
    }

    function __toString()
    {
        return "Coment ID".$this->comentId."; Coment AUTHOR: ".$this->nameOfComentAuthor.";";
    }

}
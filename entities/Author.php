<?php

/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 02.07.2017
 * Time: 14:29
 */
class Author
{
    private $authorId;
    private $authorName;

    /**
     * Author constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param mixed $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    function __toString()
    {
        return "Author ID: ".$this->authorId."; Author NAME: ".$this->authorName.";";
    }

}
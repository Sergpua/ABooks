<?php

/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 02.07.2017
 * Time: 14:36
 */
class Category
{
    private $categoryId;
    private $categoryName;

    /**
     * Category constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    function __toString()
    {
        return "Category ID: ".$this->categoryId."; Category NAME: ".$this->categoryName.";";
    }

}
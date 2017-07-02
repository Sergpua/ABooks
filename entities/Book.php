<?php

/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 02.07.2017
 * Time: 14:08
 */
class Book
{
    private $bookId;
    private $authorId;
    private $bookTitle;
    private $bookSize;
    private $bookBitrate;
    private $bookDuration;
    private $bookImage;
    private $uploadedBy;

    /**
     * Book constructor.
     */
    public function __construct()
    {
    }

    function __toString()
    {
        return "Book ID: ".$this->bookId."; Book TITLE: ".$this->bookTitle.";";
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
    public function getBookTitle()
    {
        return $this->bookTitle;
    }

    /**
     * @param mixed $bookTitle
     */
    public function setBookTitle($bookTitle)
    {
        $this->bookTitle = $bookTitle;
    }

    /**
     * @return mixed
     */
    public function getBookSize()
    {
        return $this->bookSize;
    }

    /**
     * @param mixed $bookSize
     */
    public function setBookSize($bookSize)
    {
        $this->bookSize = $bookSize;
    }

    /**
     * @return mixed
     */
    public function getBookBitrate()
    {
        return $this->bookBitrate;
    }

    /**
     * @param mixed $bookBitrate
     */
    public function setBookBitrate($bookBitrate)
    {
        $this->bookBitrate = $bookBitrate;
    }

    /**
     * @return mixed
     */
    public function getBookDuration()
    {
        return $this->bookDuration;
    }

    /**
     * @param mixed $bookDuration
     */
    public function setBookDuration($bookDuration)
    {
        $this->bookDuration = $bookDuration;
    }

    /**
     * @return mixed
     */
    public function getBookImage()
    {
        return $this->bookImage;
    }

    /**
     * @param mixed $bookImage
     */
    public function setBookImage($bookImage)
    {
        $this->bookImage = $bookImage;
    }

    /**
     * @return mixed
     */
    public function getUploadedBy()
    {
        return $this->uploadedBy;
    }

    /**
     * @param mixed $uploadedBy
     */
    public function setUploadedBy($uploadedBy)
    {
        $this->uploadedBy = $uploadedBy;
    }

    /**
     * @return mixed
     */
    public function getBookRaiting()
    {
        return $this->bookRaiting;
    }

    /**
     * @param mixed $bookRaiting
     */
    public function setBookRaiting($bookRaiting)
    {
        $this->bookRaiting = $bookRaiting;
    }

    /**
     * @return mixed
     */
    public function getBookVotes()
    {
        return $this->bookVotes;
    }

    /**
     * @param mixed $bookVotes
     */
    public function setBookVotes($bookVotes)
    {
        $this->bookVotes = $bookVotes;
    }

    /**
     * @return mixed
     */
    public function getBookDescription()
    {
        return $this->bookDescription;
    }

    /**
     * @param mixed $bookDescription
     */
    public function setBookDescription($bookDescription)
    {
        $this->bookDescription = $bookDescription;
    }

    /**
     * @return mixed
     */
    public function getDownloadTimes()
    {
        return $this->downloadTimes;
    }

    /**
     * @param mixed $downloadTimes
     */
    public function setDownloadTimes($downloadTimes)
    {
        $this->downloadTimes = $downloadTimes;
    }

    /**
     * @return mixed
     */
    public function getBookGoogleLink()
    {
        return $this->bookGoogleLink;
    }

    /**
     * @param mixed $bookGoogleLink
     */
    public function setBookGoogleLink($bookGoogleLink)
    {
        $this->bookGoogleLink = $bookGoogleLink;
    }

    /**
     * @return mixed
     */
    public function getBookMegaLink()
    {
        return $this->bookMegaLink;
    }

    /**
     * @param mixed $bookMegaLink
     */
    public function setBookMegaLink($bookMegaLink)
    {
        $this->bookMegaLink = $bookMegaLink;
    }

    /**
     * @return mixed
     */
    public function getBookDirectLink()
    {
        return $this->bookDirectLink;
    }

    /**
     * @param mixed $bookDirectLink
     */
    public function setBookDirectLink($bookDirectLink)
    {
        $this->bookDirectLink = $bookDirectLink;
    }


}
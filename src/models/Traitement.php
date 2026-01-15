<?php
namespace App\Models;
class Traitement{
    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?string $date;

    public function __construct($id = NULL, $title = NULL, $description = NULL, $date = NULL)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;   
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}
<?php
namespace App\Models;
class Operation{
    private ?int $id;
    private ?string $name;
    private ?string $date;
    private Consultation $consultation;

    public function __construct($id = NULL, $name = NULL, $date = NULL, $consultation = NULL)
    {
        $this->id = $id;
        $this->name = $name;
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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
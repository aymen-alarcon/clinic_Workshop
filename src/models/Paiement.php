<?php
namespace App\Models;
class Paiement{
    private ?int $id;
    private ?float $price;
    private ?string $title;
    private ?string $date;
    private Consultation $consultation;

    public function __construct($id = NUll, $price = NULL, $title = NULL, $date = NULL, $consultation = NULL)
    {
        $this->id = $id;
        $this->price = $price;
        $this->title = $title;
        $this->date = $date;
        $this->consultation = $consultation;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getConsultation()
    {
        return $this->consultation;
    }

    public function setConsultation($consultation)
    {
        $this->consultation = $consultation;
    }
}
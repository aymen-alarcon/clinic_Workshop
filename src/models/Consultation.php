<?php
namespace App\Models;

class Consultation{
    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?string $date;
    private Traitement $traitement;
    private Paiement $paiement;
    private RDV $rdv;
    private Operation $operation;

    public function __construct($id = NULL, $title = NULL, $description = NULL, $date = NULL, $traitement = NULL, $rdv = NULL)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->traitement = $traitement;
        $this->rdv = $rdv;
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

    public function getTraitement()
    {
        return $this->traitement;
    }

    public function setTraitement($traitement)
    {
        $this->traitement = $traitement;
    }

    public function getPaiement()
    {
        return $this->paiement;
    }

    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;
    }

    public function getRdv()
    {
        return $this->rdv;
    }

    public function setRdv($rdv)
    {
        $this->rdv = $rdv;
    }

    public function getOperation()
    {
        return $this->operation;
    }

    public function setOperation($operation)
    {
        $this->operation = $operation;
    }
}
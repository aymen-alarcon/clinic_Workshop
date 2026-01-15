<?php
namespace App\Models;
class RDV{
    private ?int $id;
    private ?string $date;
    private Patient $patient;
    private Consultation $consultation;

    public function __construct($id = NULL, $date = NULL, $patient = NULL, $consultation = NULL)
    {
        $this->id = $id;
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

    public function getPatient()
    {
        return $this->patient;
    }

    public function setPatient($patient)
    {
        $this->patient = $patient;
    }
}
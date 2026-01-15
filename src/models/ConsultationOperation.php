<?php

use App\Models\Consultation;
use App\Models\Operation;

class ConsultationOperation{
    private Consultation $consultation;
    private Operation $operation;
    private ?int $id;
    private ?string $date;

    public function __construct($consultation = NULL, $operation = NULL, $id = NULL, $date = NULL)
    {
        $this->id = $id;
        $this->date = $date;
        $this->consultation = $consultation;
        $this->operation = $operation;
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

    public function getOperation()
    {
        return $this->operation;
    }

    public function setOperation($operation)
    {
        $this->operation = $operation;
    }
}
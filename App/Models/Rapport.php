<?php

namespace App\Models;
use Arch\Model;

class Rapport extends Model {
    /** @var Datetime $dateDebutMission */
    protected $dateDebutMission;

    /** @var Datetime $dateFinMission */
    protected $dateFinMission;

     /** @var String $description */
    protected $description;

     /** @var Int $nombreTech */ //Nombre d'expert sur la mission
     protected $nombreTech;

     /** @var Int $montantMission */ //Nombre d'expert sur la mission
     protected $montantMission;

    protected $fillable = ['dateDebutMission','dateFinMission','description','nombreTech','montantMission'];

    static protected $table = 'rapports';

    public function __construct($attributes){
        parent::__construct($attributes);
    }

   public function setDateDebutMission($dateDebutMission){
        $this->dateDebutMission = $dateDebutMission;
        $this->save();
   }

   public function setMontantMission($montantMission)
   {
    $this->montantMission = $montantMission;
    $this->save();
   }
   public function setDateFinMission($dateFinMission){
    $this->dateFinMission = $dateFinMission;
    $this->save();
    }
    public function setDescription($description)
    {
        $this->description = $description;
        $this->save();
    }

    public function setNombreTech($nombreTech)
    {
        $this->nombreTech = $nombreTech;
        $this->save();
    }

    public function getDateDebutMission()
        {
            return $this->$dateDebutMission;
    }

    public function getDateFinMission()
        {
            return $this->$dateFinMission;
    }

    public function getDescription()
        {
            return $this->$description;
    }

    public function getNombreTech()
        {
            return $this->$nombreTech;
    }
    public function getMontantMission($montantMission)
    {
        return $this->$montantMission;
    }
}










?>
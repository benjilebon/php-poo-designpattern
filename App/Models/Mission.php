<?php

namespace App\Models;
use Arch\Model;

class Mission extends Model {
    /** @var Datetime $dateDebutMission */
    protected $dateDebutMission;

    /** @var Datetime $dateFinMission */
    protected $dateFinMission;

     /** @var String $description */
    protected $description;

     /** @var Int $nombreTech */ //Nombre d'expert sur la mission
     protected $nombreTech;

    protected $fillable = ['dateDebutMission','dateFinMission','description','nombreTech'];

    static protected $table = 'mission';

    public function __construct($attributes){
        parent::__construct($attributes);
    }

   public function setDateDebutMission($dateDebutMission){
        $this->dateDebutMission = $dateDebutMission;
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
}










?>
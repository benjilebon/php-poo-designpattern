<?php

namespace App\Models;
use Arch\Model;

class Facture extends Model {


    /** @var Datetime $dateFacture */
    protected $dateFacture;

     /** @var Int $montant */
    protected $montant;

    protected $fillable = ['dateFacture','montant'];

    static protected $table = 'factures';

    public function __construct($attributes){
        parent::__construct($attributes);
    }

   public function setDateFacture($dateFacture){
        $this->dateFacture = $dateFacture;
        $this->save();
   }

   public function setMontant($montant){
        $this->montant = $montant;
        $this->save();
   }

   public function getDateFacture(){
       return $this->dateFacture;
   }

   public function getMontant(){
        return $this->montant;
    }
}










?>
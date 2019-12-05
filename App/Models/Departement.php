<?php 
namespace App;

class Departement extends Model{
    /** @var String $expertise */
    private $expertise;

    protected $fillable=['expertise'];

    public function setExpertise($expertise)
    {
        $this->expertise = $expertise;
        $this->save();
    }

    public function getExpertise()
    {
        return $this->expertise;
    }
}
?>
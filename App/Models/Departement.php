<?php 
namespace App\Models;
use Arch\Model;

class Departement extends Model{
    /** @var String $expertise */
    protected $name;
    /** @var String $expertise */
    protected $expertise;

    protected $fillable=['expertise'];
    
    static protected $table = 'departement';

    public function __construct($attributes){
        parent::__construct($attributes);
    }

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
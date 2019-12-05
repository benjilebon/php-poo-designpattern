<?php

namespace App\Models;
// require '../../arch/interface/Employe.php';
// require '../../arch/interface/Employe.php';
use Arch\Employe;
use Arch\Model;

class Collaborateur extends Model implements Employe {
    protected $name;
    protected $firstname;
    protected $birthDate;
    protected $address;
    protected $maritalStatus;
    protected $salary;
    protected $yearsInCompany;

    protected $fillable = ['name', 'firstname'];

    static protected $table = 'collaborateurs';

    function __construct(Array $attributes) {
        parent::__construct($attributes);
    }

    public function setName($name) {
        $this->name = $name;
        $this->save();
    }
    
    public function setFirstname($firstName) {
        $this->firstname = $firstName;
        $this->save();
    }

    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
        $this->save();
    }

    public function setAddress($address) {
        $this->address = $address;
        $this->save();
    }

    public function setMaritalStatus($maritalStatus) {
        $this->maritalStatus = $maritalStatus;
        $this->save();
    }

    public function setYearsInTheCompany($yearsInCompany) {
        $this->yearsInCompany = $yearsInCompany;
        $this->save();
    }

    public function setSalary($salary) {
        $this->salary = $salary;
        $this->save();
    }

    public function getName(){
        return $this->name;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function getBirthDate(){
        return $this->birthDate;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getMaritalStatus(){
        return $this->maritalStatus;
    }

    public function getYearsInTheCompany(){
        return $this->yearsInCompany;
    }
    
    public function getSalary(){
        return $this->salary;
    }

}

?>
<?php
namespace Arch;

interface Employe {

    public function getName();
    public function setName($p);

    public function getFirstName();
    public function setFirstName($p);

    public function getBirthDate();
    public function setBirthDate($p);

    public function getAddress();
    public function setAddress($p);

    public function getMaritalStatus();
    public function setMaritalStatus($p);

    public function getYearsInTheCompany();
    public function setYearsInTheCompany($p);

    public function getSalary();
    public function setSalary($p);

}

?>
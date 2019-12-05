<?php

namespace Arch\model;

// require 'Database/mysql.php';

class Model {

    private function getId() {
        
    }

    static public function getById($table, $id) {
        global $db;

        $query = $db->getPDO()->query('
        SELECT * from `'.$table.'` WHERE id = '.$id.'
        ')->fetch();

        var_dump($query);

        $object = instantiate([
            getFillablesWithValues($fillable)
        ]);
        var_dump($object);
        return $object;
    }

    private function instantiate($attributes = []) {
        $model = new static((array) $attributes);

        return $model;
    }

    private function getFillablesWithValues(Array $fillables) {
        $results = [];
        foreach ($fillables as $fillable) {
            $results[] = [$fillable => $this->$fillable];
        }
    }

    public function create() {
        global $db;
        $chain = implode(',',$this->fillable);
        echo '
        INSERT INTO '.$this->table.'('.$chain.')
        VALUES('.$this->getValuesForSQL($this->fillable, 0).')
        ';
        $res = $db->getPDO()->query('
        INSERT INTO '.$this->table.'('.$chain.')
        VALUES('.$this->getValuesForSQL($this->fillable, 0).')
        ');
        var_dump($res);
        
    }

    public function save() {
        global $db;
        $db->getPDO()->query('
        UPDATE `'.$this->table.'` SET '.$this->getValuesForSQL($this->fillable, 1).' WHERE `'.$this->table.'`.`'.$this->getId().'`
        ');
    }

    private function getValuesForSQL(Array $array, $type) {
        $values = [];
        $updateValues = [];
        if (!$type) {
            foreach ($array as $item) {
                $values[] = '"'.$this->$item.'"';
            }
            return implode(',', $values);
        } 
        else {
            foreach ($array as $item) {
                $values[] = '`'.$item.'` = `'.$this->$item.'`';
            }
            return implode(',', $values);
        }

    }

//TODO: modif

}



?>
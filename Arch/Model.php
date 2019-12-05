<?php

namespace Arch;

abstract class Model {

    protected $id;
    static protected $table;

    /**
     * Construit le Model en utilisant les attributs passés en paramètre
     *
     * @param Array    $attributes  ['foo' => 'bar', 'nom' => 'bob']
     */
    protected function __construct(Array $attributes) {
        foreach ($attributes as $attr => $value) {
            $this->$attr = $value;
        }
    }

    /**
     * Récupère l'ID de l'objet dans la Base de données
     *
     * @return int     2
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Sauvegarde un Objet existant dans la base de données
     * 
     * Équivalent de l'update en CRUD
     * 
     * @return Object       object(App\Models\Client)#0
     * @throws \Exception   Si l'objet n'existe pas dans la base de données
     */
    public function save() {
        global $db;

        if ($this->getId() === null) {
            throw new \Exception("Object doesn't exist in Database");
        }

        $db->getPDO()->query('
        UPDATE `'.static::$table.'` SET '.$this->getValuesForSQL($this->fillable, 1).' WHERE `'.static::$table.'`.`id` = '.$this->getId()
        );
    }

    /**
     * Récupère un Objet dans la base de données et retourne une instance de l'objet récupéré
     * 
     * Équivalent de read en CRUD
     * 
     * @param int       $id     4
     * @return Object   object(App\Models\Client)#0
     * @return Boolean  false si l'objet n'existe pas
     * 
     * 
     */
    static public function getById($id) {
        global $db;

        $query = $db->getPDO()->query('
        SELECT * from `'.static::$table.'` WHERE id = '.$id.'
        ')->fetch(\PDO::FETCH_ASSOC);

        if (!$query) {
            trigger_error('Object does not exist in Database', E_USER_WARNING);
            return false;
        }


        $object = self::instantiate($query);

        return $object;
    }

    /**
     * Exporte l'objet dans la base de données
     * 
     * 
     * @return Object    object(App\Models\Client)#0
     */
    public function create() {
        global $db;
        $chain = implode(',',$this->fillable);
        $db->getPDO()->query('
        INSERT INTO '.static::$table.'('.$chain.')
        VALUES('.$this->getValuesForSQL($this->fillable, 0).')
        ');

        $this->setId($db->getPDO()->lastInsertId());

        return $this;
    }

    /**
     * Exporte l'objet dans la base de données
     * 
     * 
     * @return Boolean      True si la requête c'est bien executé
     * @throws \Exception   Si l'objet n'existe pas
     */
    public function delete() {
        global $db;
        try {
            $req = $db->getPDO()->prepare("DELETE FROM ".static::$table." where id=".$this->id);
            $req->execute();
        }
        catch (\Exception $e) {
            throw new \Exception("Can't delete :".$e);
        }

        return true;
    }

    /**
     * Crée l'instance de l'objet avec des attributs
     * 
     * Utilisé avec getById()
     * 
     * @param Array      $attributes  ['foo' => 'bar', 'nom' => 'bob']
     * 
     * @return Object    object(App\Models\Client)#0
     */
    static private function instantiate($attributes = []) {

        $model = new static((array) $attributes);

        return $model;
    }

    /**
     * Crée l'instance de l'objet avec des attributs
     * 
     * Utilisé avec getById()
     * 
     * @param Array      $attributes  ['foo' => 'bar', 'nom' => 'bob']
     * 
     * @return Object    object(App\Models\Client)#0
     */
    private function getFillablesWithValues(Array $fillables) {
        $results = [];
        foreach ($fillables as $fillable) {
            $results[] = [$fillable => $this->$fillable];
        }
    }

    /**
     * Insère l'ID dans l'instance de l'Objet
     * 
     * @param int       $id     $db->getPDO()->lastInsertId()
     */
    private function setId($id) {
        return $this->id = $id;
    }

    /**
     * Récupère et formatte les valeurs des attributs d'un objet pour une requête SQL
     * 
     * @param Array         $array      $this->fillable
     * @param Boolean       $type       True
     */
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
                $values[] = '`'.$item.'` = "'.$this->$item.'"';
            }
            return implode(',', $values);
        }

    }

}



?>
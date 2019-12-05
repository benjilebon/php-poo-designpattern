<?php 

namespace DB;

class Database {
    private $bdo;

    /**
     * Connecte à la base de données
     *
     */
    function __construct() {
        try {
            $this->bdo = new \PDO('mysql:host=localhost;dbname=phppoo','root','root');
            $this->bdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e) {
            echo 'Une exception a été lancée. Message d\'erreur: ', $e->getMessage();
        }
    }

    /**
     * Récupère le PDO
     * 
     * 
     * @return \PDO   object(\PDO)#0
     */
    public function getPDO() {
        return $this->bdo;
    }

    /**
     * Permet de créer une table dans la base de données
     * 
     * @param String    $name       Nom de la base de données
     * @param Array     $columns    Colonnes de la table (['nom' => 'type'])
     * @param Boolean   $id         Avec des ID ?
     */
    public function createTable($name, Array $columns, $id = true) {

        if (!$this->tableExists($name)) {
            $table = new Table($name, $this->bdo);
            $id ? null : $table->delIdentifiers();
            foreach ($columns as $name => $type) {
                $table->addColumn($name, $type);
            }
        }

    }

    /**
     * Teste si la table données existe déjà ou non dans la base de données
     * 
     * @param String    $name       Nom de la table
     * @return Boolean  true/false  true si la table existe, false si elle n'existe pas
     */
    private function tableExists($name) {
        $q = $this->bdo->prepare( "DESCRIBE `".$name."`");
        try {
            $q->execute();
            return true;
        } 
        catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

}



class Table {

    /** @var PDO $bdo */
    private $bdo;
    public $name;

    /**
     * 
     * Créé la table
     * 
     * @param String $name      Nom de la table à créer
     * @param PDO    $bdo       Instance du PDO
     */
    public function __construct($name, $bdo) {
        $this->bdo = $bdo;
        $this->name = $name;

        $lol = $bdo->query('CREATE TABLE '.$name.' (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT);');
    }

    /**
     * 
     * Supprime les ID d'une table
     * 
     */
    public function delIdentifiers() {
        $this->bdo->query('ALTER TABLE '.$this->name.'DROP "id"');
    }

    /**
     * 
     * Ajoute une colonne à la table
     * 
     * @param String    $columnName     Nom de la colonne
     * @param String    $type           Type de la colonne
     * @param Boolean   $nullable       La colonne peut-elle être null ?
     * 
     * @throws \Exception               Si le type fourni est invalide
     * 
     * @return Table   
     */
    public function addColumn(String $columnName, String $type, $nullable = true) {
        switch ($type) {
            case 'string':              $formattedType = 'VARCHAR (255)'; break;
            case 'int':                 $formattedType = 'INT'; break;
            case 'datetime':            $formattedType = 'DATETIME'; break;
            case 'float':               $formattedType = 'FLOAT'; break;
            default:                    throw new \Exception('Invalid Type in Column'); break;
        }
        $nullable = $nullable ? 'NULL' : 'NOT NULL';
        $this->bdo->query('ALTER TABLE '.$this->name.' ADD COLUMN '.$columnName.' '.$formattedType.' '.$nullable);

        return $this;
    }

}



$db = new Database();
global $db;

?>
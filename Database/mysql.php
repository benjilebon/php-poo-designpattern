<?php 

namespace DB;

class Database {
    private $bdo;

    function __construct() {
        try {
            $this->bdo = new \PDO('mysql:host=localhost;dbname=phppoo','root','root');
            $this->bdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e) {
            echo 'Une exception a été lancée. Message d\'erreur: ', $e->getMessage();
        }
    }

    public function getPDO() {
        return $this->bdo;
    }

    public function createTable($name, Array $columns, $id = true) {

        if (!$this->tableExists($name)) {
            $table = new Table($name, $this->bdo);
            $id ? null : $table->delIdentifiers();
            foreach ($columns as $name => $type) {
                $table->addColumn($name, $type);
            }
        }

    }

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

    static function select() {

    }

}



class Table {

    /** @var PDO $bdo */
    private $bdo;
    public $name;

    public function __construct($name, $bdo) {
        $this->bdo = $bdo;
        $this->name = $name;

        $lol = $bdo->query('CREATE TABLE '.$name.' (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT);');
    }

    public function delIdentifiers() {
        $this->bdo->query('ALTER TABLE '.$this->name.'DROP "id"');
    }

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
<?php

namespace Core\Auth;


trait Authenticable {
    public static function checkUsernameAndPassword($name, $pass) {
        global $db;

        $query = $db->getPDO()->prepare("SELECT * FROM ".static::$table." WHERE username = ? AND password = ?");
        $query->bindParam(1, $name);
        $query->bindParam(2, $pass);
        $success = $query->execute();
        
        $rows = $query->fetch(\PDO::FETCH_ASSOC);
        if ($rows == false) {
            return false;
        } else {
            return $rows;
        }
    }

    public static function authenticate($name, $pass) {
        $login = static::checkUsernameAndPassword($name, $pass);

        if ($login) {
            \session_start();
            $_SESSION['user'] = self::instantiate($login);

            return $_SESSION['user'];
        } else {
            return false;
        }
    }

    public static function authentified() {
        if (count($_SESSION) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function logout() {
        unset($_SESSION['user']);

        return;
    }
}
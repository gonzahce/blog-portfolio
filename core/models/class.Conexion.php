<?php

/**
* This is the description for the class below.
*
* @package    my-package
* @subpackage my-subpackage
* @author     my-name
* @version    my-version
* ...
*/

class Conexion extends mysqli {
    public function __construct() {
        parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->connect_errno ? die('Error en la conexion') : null;
        $this->set_charset("utf8");
    }
    public function rows ($query) {
        return mysqli_num_rows($query);
    }
    public function liberar ($query) {
        return mysqli_free_result($query);
    }
    public function recorrer($query) {
        return mysqli_fetch_array($query);
    }
}

?>
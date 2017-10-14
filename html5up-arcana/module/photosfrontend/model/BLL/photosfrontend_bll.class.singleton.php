<?php

/*$path = $_SERVER['DOCUMENT_ROOT'] . '/html5up-arcana/';
//define('SITE_ROOT', $path);
define('MODEL_PATH', SITE_ROOT . 'model/');

require (MODEL_PATH . "db.class.singleton.php");
require(SITE_ROOT . "module/photos_frontend/model/DAO/photo_dao.class.singleton.php");*/

class photosfrontend_bll {
    private $dao;
    private $db;
    static $_instance;

    private function __construct() {
        $this->dao = photosfrontend_dao::getInstance();
        $this->db = db::getInstance();
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    public function list_photo_BLL() {
        return $this->dao->list_photo_DAO($this->db);
    }
    public function detail_photo_BLL($id) {
        return $this->dao->detail_photo_DAO($this->db, $id);
    }
    public function list_photo_BLL_limit($no) {
        return $this->dao->list_photo_DAO_limit($this->db, $no);
    }
}

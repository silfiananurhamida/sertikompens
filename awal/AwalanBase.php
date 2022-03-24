<?php

require_once __DIR__.'/../config/konek.php';

class BaseModel {
    protected $db;

    public function __construct() {
        $this->db = new Database();
    }
}
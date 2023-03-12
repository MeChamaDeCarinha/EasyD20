<?php

namespace Src\Lib;

class Database {
    public static function conect() {
        return mysqli_connect(DB_URL, DB_USER, DB_SENHA, DB);
    }

    public static function salvar($objeto) : bool {
        return true;
    }
}
<?php

namespace application\lib;

class Db
{
    protected $db;

    public function __construct()
    {
    }
    //защита от инъекций
    public function query($sql, $params = [])
    {
        $val = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $val->bindValue(':' . $key, $value);
            }
        }
        $val->execute();
        return $val;
        //$this->db->query(sql);
    }
}

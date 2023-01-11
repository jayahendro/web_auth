<?php
class Crud {
    protected $db;

    function __construct($db) {
        $this->db = $db;
    }

    function select_from($table) {
        return $this->db->query("SELECT * FROM $table");
    }

    function select_where($table, $where)
    {
        $row = null;
        $wheres = "";
        foreach ($where as $key => $result) {
            if ($key == 0) {
                $wheres .= $result["key"]." = ".$result["value"];
            } else {
                $wheres .= "AND ".$result["key"]." = ".$result["value"];
            }
        }
        $row = $this->db->prepare("SELECT * FROM $table WHERE $wheres");
        $row->execute();

        return $row;
    }

    function insert($table, $params)
    {
        $key = array_keys($params);
        $val = array_values($params);

        $query = "INSERT INTO $table (". implode(', ', $key) .") "
            . "VALUES ('" . implode("', '", $val) . "')";

        $row = $this->db->prepare($query);

        return $row ->execute();
    }

    function update($table, $data, $where, $id)
    {
        $setPart = array();
        foreach ($data as $key => $value)
        {
            $setPart[] = $key."=:".$key;
        }
        $sql = "UPDATE $table SET ".implode(', ', $setPart)." WHERE $where = :id";
        $row = $this->db->prepare($sql);
        $row->bindValue(':id', $id); // where
        foreach($data as $param => $val)
        {
            $row ->bindValue($param, $val);
        }

        return $row ->execute();
    }

    function delete($table, $where, $id)
    {
        $sql = "DELETE FROM $table WHERE $where = ?";
        $row = $this->db->prepare($sql);

        return $row ->execute(array($id));
    }
}

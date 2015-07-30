<?php

/**
 * Created by PhpStorm.
 * User: Angreh
 * Date: 27/07/2015
 * Time: 17:34
 */
class Model_Core
{
    protected $table = '';

    public function getAll($values = [])
    {
        if (empty($values)) {
            $fields = '*';
        } else {
            $fields = implode(',', $values);
        }
        $sql = "SELECT $fields FROM " . $this->table . " WHERE deleted=0";

        $result = $this->query($sql);
        if ($result->num_rows > 0) {
            $return = [];
            while ($row = $result->fetch_object()) {
                $return[] = $row;
            }
            return $return;
        } else {
            return false;
        }
    }

    public function get($where)
    {
        $clause = [];
        foreach ($where as $field => $value) {
            $clause[] = $field . '=\'' . $value . "'";
        }
        $clause = implode(' AND ', $clause);
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE ' . $clause . " AND deleted=0";

        $result = $this->query($sql);
        if ($result->num_rows == 1) {
            return $result->fetch_object();
        } else {
            if ($result->num_rows > 1) {
                $return = [];
                while ($row = $result->fetch_object()) {
                    $return[] = $row;
                }
                return $return;
            } else {
                return false;
            }
        }
    }

    public function insert($data)
    {
        $sql = 'INSERT INTO ' . $this->table . ' (' . implode(',', array_keys($data)) . ') VALUES ("' . implode('","', array_values($data)) . '")';
        return $this->query($sql);
    }

    public function update($data, $primaryKey = 'id')
    {
        if (isset($data['id'])) {
            $id = $data['id'];
            unset($data['id']);
        }
        $fields = [];
        foreach ($data as $field => $value) {
            $fields[] = $field . '="' . $value . '"';
        }
        $fields = implode(',', $fields);
        $sql = 'UPDATE ' . $this->table . ' SET ' . $fields . ' WHERE ' . $primaryKey . '=' . $id;
        return $this->query($sql);
    }

    public function softDelete($id)
    {
        return $this->update([
            'id' => $id,
            'deleted' => 1
        ]);
    }

    public function delete($id)
    {
        //
    }

    public function dbConnect()
    {
        $db = mysqli_connect('localhost', 'root', '', 'ccntransporte');
        return $db;
    }

    public function query($sql)
    {
        $db = $this->dbConnect();
        return $db->query($sql);
    }

}
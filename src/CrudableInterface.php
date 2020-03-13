<?php
namespace Erbilen\Database;

interface CrudableInterface
{

    public function create($data, $tableName);

    public function read($id, $tableName);

    public function update($id, $tableName, $data);

    public function delete($id, $tableName);
}
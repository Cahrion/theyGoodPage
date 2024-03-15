<?php
namespace App\Models;
use CodeIgniter\Model;

class MainTableModel extends Model {
    // Stock Model
    protected $table      = 'maintable';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = [
        "tableName", "tableLink"
    ];

        /* Select */
    public function getAllData(){
        $result = $this->get()->getResultArray();
        return $result;
    }
    public function getDataByID($id){
        $result = $this->where("id", $id)->get()->getRowArray();
        return $result;
    }
    public function getDataByTableLink($tableLink){
        $result = $this->where("tableLink", $tableLink)->get()->getRowArray();
        return $result;
    }
    /* Add */

    public function setData($tableName, $tableLink){
        $data = array(
            "tableName" => $tableName,
            "tableLink" => $tableLink,
        );
        $this->insert($data);
        return $this->insertID;
    }

    /* Update */
    /* Delete */
}

?>
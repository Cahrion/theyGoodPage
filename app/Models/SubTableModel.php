<?php
namespace App\Models;
use CodeIgniter\Model;

class SubTableModel extends Model {
    // Supply Model
    protected $table      = 'subTable';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        "id", "tableName", "tableLink"
    ];

        /* Select */
    public function getAllData(){
        $result = $this->get()->getResult();
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
    public function getDataByTopTable($topTable){
        $result = $this->where("topTable", $topTable)->get()->getResultArray();
        return $result;
    }

    /* Add */

    public function setData($tableName, $tableLink, $topTable){
        $data = array(
            "tableName" => $tableName,
            "tableLink" => $tableLink,
            "topTable" => $topTable,
        );
        $this->insert($data);
        return $this->insertID;
    }

    /* Check */

    /* Update */

    
    /* Delete */
}

?>